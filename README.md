# FamilyWealth Management System

This is a PHP + MySQL implementation of the first two project modules plus user management, based on the submitted Figma wireframe.

## Implemented
1. User Management
   - Register
   - Login
   - Logout
   - Password hashing
   - Session protection

2. Module 1 — Family Structure
   - Hierarchical family tree
   - Selectable family members
   - Member profile
   - Demographics
   - Contact information
   - Blood group
   - Passport / National ID / Driver's License expiry tracking
   - Personal net worth
   - Add family member

3. Module 2 — Family Savings
   - Individual member savings cards
   - Total savings
   - Number of accounts
   - Monthly credits
   - Savings account detail table
   - Recent transactions
   - Add savings account

## MAMP setup
1. Put the `familywealth` folder inside `/Applications/MAMP/htdocs/`.
2. Start Apache and MySQL from MAMP.
3. Open phpMyAdmin and import `database/familywealth.sql`.
4. Check `config/database.php`.
   - Typical MAMP MySQL settings: user `root`, password `root`, host `localhost`.
5. Open:
   `http://localhost/familywealth/auth/register.php`

The UI intentionally keeps the same overall structure, colors, sidebar, cards, profile panel and savings layout as the submitted wireframe.
