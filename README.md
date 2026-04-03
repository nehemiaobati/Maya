# Maya — CodeIgniter 4 Development Environment

**Maya** is a curated fork of the official CodeIgniter 4 framework, enhanced with modern development tools and strict quality gates. It is intended for building robust, maintainable PHP applications with a focus on code quality and developer experience.

## ✨ Features

- **Framework Core**: Upstream CodeIgniter 4 with all its strengths — lightweight, fast, secure, and flexible.
- **Static Analysis**: Integrated PHPStan, Psalm, and rector checks to catch bugs early.
- **Code Styling**: PHP-CS-Fixer configurations (dist, no-header, user-guide) to enforce consistent style.
- **Testing**: PHPUnit configuration and baseline for reliable TDD.
- **Documentation**: Includes user guide sources and API docs ready for generation.

## 🛠️ Tooling Included

| Tool | Purpose |
|------|---------|
| PHPStan | Advanced static analysis |
| Psalm | Type-aware analysis |
| Rector | Automated refactoring |
| PHP-CS-Fixer | Code style enforcement |
| PHPUnit | Unit & integration testing |

## 📦 Requirements

- PHP 7.4+ (8.2+ recommended)
- Composer
- Extensions: `curl`, `mbstring`, `json`, `xml`

## 🚀 Getting Started

```bash
# Clone the repository
git clone https://github.com/nehemiaobati/Maya.git
cd Maya

# Install dependencies
composer install

# Run tests
./spark test

# Serve the sample app
./spark serve
```

## 📚 Documentation

- Full user guide: https://codeigniter.com/user_guide/
- API reference: https://codeigniter4.github.io/api/
- Contributing: see `CONTRIBUTING.md`
- Security policy: `SECURITY.md`

## 🤝 Contributing

We welcome community contributions. Please read the contributing guidelines and follow the coding standards defined in `.php-cs-fixer.dist.php`.

## 📄 License

Licensed under the MIT License. See `LICENSE` for details.

---

*Maya is a personal development environment built on top of CodeIgniter 4. It is not intended for production deployment as-is; rather, it serves as a foundation for your own applications.*
