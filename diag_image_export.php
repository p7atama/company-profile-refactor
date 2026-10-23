<?php
/**
 * TEMPORARY diagnostic for the export_excel_with_image 500 error.
 * Upload to the web root (next to index.php) and visit in the browser:
 *   https://padmasoode.co.id/diag_image_export.php
 * Delete it after we find the cause.
 */
error_reporting(E_ALL);
ini_set('display_errors', '1');
header('Content-Type: text/plain; charset=utf-8');

echo "=== PHP ENVIRONMENT ===\n";
echo "PHP version: " . PHP_VERSION . "\n";
echo "memory_limit: " . ini_get('memory_limit') . "\n";
echo "display_errors: " . ini_get('display_errors') . "\n";
echo "error_reporting: " . ini_get('error_reporting') . "\n\n";

echo "=== VIEW FILE CHECK ===\n";
$view_path = __DIR__ . '/application/views/admin/applicants_excel_report_with_image.php';
echo "Looking for: $view_path\n";
echo "File exists: " . (file_exists($view_path) ? "YES" : "NO") . "\n";
if (file_exists($view_path)) {
    echo "File size: " . filesize($view_path) . " bytes\n";
    echo "Readable: " . (is_readable($view_path) ? "YES" : "NO") . "\n";
    // Check for BOM / encoding issues
    $first = file_get_contents($view_path, false, null, 0, 5);
    echo "First 5 bytes (hex): " . bin2hex($first) . "\n";
    if (ord($first[0]) === 0xEF) {
        echo "*** WARNING: file starts with a UTF-8 BOM ***\n";
    }
} else {
    echo "\n*** THE VIEW FILE IS NOT ON THE SERVER. ***\n";
    echo "Upload applicants_excel_report_with_image.php to:\n";
    echo "  application/views/admin/\n";
}
echo "\n";

echo "=== ORIGINAL VIEW (for comparison) ===\n";
$orig_path = __DIR__ . '/application/views/admin/applicants_excel_report.php';
echo "Original exists: " . (file_exists($orig_path) ? "YES" : "NO") . "\n\n";

echo "=== UPLOADS/RECRUITMENT DIR ===\n";
$upload_dir = __DIR__ . '/uploads/recruitment';
echo "Dir exists: " . (is_dir($upload_dir) ? "YES" : "NO") . "\n";
if (is_dir($upload_dir)) {
    $files = scandir($upload_dir);
    $files = array_diff($files, array('.', '..'));
    echo "File count: " . count($files) . "\n";
    $sample = array_slice($files, 0, 5);
    foreach ($sample as $f) {
        $full = $upload_dir . '/' . $f;
        echo "  $f (" . filesize($full) . " bytes)\n";
    }
}
echo "\n";

echo "=== PHP SYNTAX CHECK ON VIEW ===\n";
if (file_exists($view_path)) {
    $out = array();
    $code = 0;
    exec('php -l ' . escapeshellarg($view_path) . ' 2>&1', $out, $code);
    echo "Exit code: $code\n";
    echo implode("\n", $out) . "\n";
}
echo "\n";

echo "=== TEST: render just the image cell logic ===\n";
try {
    $foto = 'test.jpg'; // simulate
    if ($foto !== null && $foto !== '') {
        $url = 'https://padmasoode.co.id/uploads/recruitment/' . $foto;
        $html = '<img src="' . $url . '" width="80" height="100" />';
        echo "Generated HTML: $html\n";
        echo "Logic OK\n";
    }
} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}

echo "\n=== DONE ===\n";
echo "Paste this entire output back.\n";