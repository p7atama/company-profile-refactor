# Company Profile (CodeIgniter 3) - Refactor Base

Public snapshot of a company-profile website for refactoring. All secrets and
personal data have been removed or anonymized (see "Data handling" below).

## Stack

- PHP 5.6 originally; runs on PHP 7.4 locally (driver already switched to `mysqli`)
- CodeIgniter 3.1.x, MySQL 5.7+/8.0 or MariaDB
- Apache with mod_rewrite (`.htaccess` included) - Laragon/XAMPP work out of the box

## Setup

1. Create database and user:

   ```sql
   CREATE DATABASE company_profile CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
   CREATE USER 'company_profile'@'localhost' IDENTIFIED BY 'CHANGE_ME';
   CREATE USER 'company_profile'@'127.0.0.1' IDENTIFIED BY 'CHANGE_ME';
   GRANT ALL PRIVILEGES ON company_profile.* TO 'company_profile'@'localhost';
   GRANT ALL PRIVILEGES ON company_profile.* TO 'company_profile'@'127.0.0.1';
   FLUSH PRIVILEGES;
   ```

2. Import `db/schema.sql`, then `db/seed.sql`.

3. Point your webserver at this folder (e.g. Laragon: place under `www/`,
   open `http://localhost/company-profile-refactor/`).

4. Database credentials come from environment variables, falling back to the
   defaults above: `CP_DB_USER`, `CP_DB_PASS`, `CP_DB_NAME`
   (see `application/config/database.php`).

## Data handling

- `db/schema.sql` - full structure, 31 tables incl. 4 views (definers stripped).
- `db/seed.sql`:
  - Content/reference tables (regions, job posts, FAQ, gallery, homepage) - full data.
  - Sensitive tables (`tb_pelamar`, `apply_cv`, `employee_data`, `tb_contact`,
    `contact_us`, `tb_user`, `tb_pengguna`, `tb_audit_log`) - 4-10 random rows
    each with names, NIK, emails, phones, addresses, IPs and JSON blobs replaced
    by synthetic values. Passwords are `bcrypt("password")` hashes.
- `uploads/` applicant documents are excluded; only site-content images are
  included. Large promotional videos are excluded (job listing pages will show
  broken video embeds - expected).

## Known quirks (documented, not bugs)

- Admin login seed users: username kept, password is `password`.
- Career page shows open vacancies only; the seed data contains none, so the
  job list renders empty. Open one by setting `tb_recruitment.close` to a
  future date.
- `uploads/home/yamaha-music.PNG` vs `.png`, `system/libraries/Javascript/` vs
  `javascript/`: the source server stores case-variant duplicates. Git handles
  them fine on case-sensitive filesystems; on Windows checkouts they collapse -
  harmless for the app.

## Refactoring

Work on feature branches off `main`, open pull requests.
