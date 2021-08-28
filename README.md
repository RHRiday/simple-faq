# SimpleFAQ

Made by Rifat &copy; PONDITs

**A Laravel package for FAQ section of any product website.**

## Installation
To install with Composer, simply require the latest version of this package.

```composer require rhriday/simple-faq```

to download required asset use:

```php artisan vendor:publish --tag=public --force```

to migrate database with the tables:
```php artisan migrate```

you can also generate some random FAQs to your collection by using `--seed` flag with migrations. Or you can use:
```db:seed``` instead.

## Migrations
> User `table=users`
- name
- email
- password
- role (default: 2) `[1 => 'super-admin', 2 => 'admin']`
> FAQ `table=faqs`
- question
- answer
- priority
- publication_status `[0 => Unpublished, 1 => Published]`

Read the [documentation](https://www.example.com) for further inquiry.

# Getting Started
> use following credentials to login, and start customizing your FAQ page.

|**Email**       | **Password** |
|----------------|--------------|
|pondit@admin.com|ponditadmin   |

**goto `YOURSITE/faq` to see the output**

## Features
1. Admin Login
    - Dashboard
    - Manage FAQs (CRUD)
    - Drag & Drop to sort quickly
    - Verification message on every action
2. Visitors view
    - Search any FAQ instantly
    - Accordion FAQ dropdown

## Live demo
Watch a live demo of this project on — [PONDITs FAQ](https://faq-pondit.herokuapp.com)

