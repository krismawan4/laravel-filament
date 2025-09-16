# Filament

Filament menggunakan pola Resource-based Architecture:

1. Resource Class (UserResource.php) - Controller utama
2. Form Schema (UserForm.php) - Definisi form fields
3. Table Schema (UsersTable.php) - Definisi kolom tabel
4. Pages (ListUsers.php, CreateUser.php, EditUser.php) - Views

Alur Kerja Filament:

Request → Resource → Schema → Model → Database
↓ ↓ ↓ ↓ ↓
/admin → UserResource → UserForm → User → users table

Perbedaan dengan MVC Laravel:

| Laravel MVC               | Filament                   |
| ------------------------- | -------------------------- |
| Controller → View → Model | Resource → Schema → Model  |
| Manual form validation    | Auto-generated dari schema |
| Custom blade templates    | Auto-generated UI          |
| Manual CRUD logic         | Auto-generated CRUD        |

Keuntungan Filament:

-   Lebih cepat development admin panel
-   Konsisten UI/UX
-   Less boilerplate code
-   Built-in features (search, filter, pagination)

File yang perlu diperhatikan:

-   UserResource.php - Logika utama seperti controller
-   UserForm.php - Form validation & fields
-   UsersTable.php - Table columns & actions
-   Model tetap menggunakan Eloquent seperti biasa

Jadi Filament lebih ke "convention over configuration" - less coding, more productivity untuk admin panels.

Filament generates semua UI otomatis:

-   Table listing - dari UsersTable.php
-   Create form - dari UserForm.php
-   Edit form - dari UserForm.php
-   Navigation - dari UserResource.php
-   Actions - dari configuration

Magic behind the scenes:

Filament menggunakan Livewire + Alpine.js untuk generate reactive UI components dari PHP schema definitions.

// Ini jadi table HTML lengkap otomatis:
TextColumn::make('name')->searchable()->sortable()

Keuntungan:

-   Zero HTML/CSS coding
-   Consistent UI/UX
-   Responsive design built-in
-   Dark mode support
-   Accessibility compliant

Filament = Admin panel tanpa frontend coding! ✨
