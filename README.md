# 🗳️ Take Your Votes to the Next Level

Voting technology that looks to the future, not the past.

Building an election is easy; you're always in control with a Voting system. It's easy to build and customise an online election system.

Create an election for your school or university in seconds. Your voters can cast their votes from any location on any device.

**Don't believe me? See for yourself.**

---

### ✅ Only 3 Steps — And Your Election Is Live!
1. **Create & manage ballots** with an intuitive admin dashboard  
2. **Upload your electoral roll** and authenticate voters securely  
3. **Launch the election** and monitor real-time turnout and results  

---

## 🛠️ Tech Stack 
This project has been modernized using **Laravel**, the premier PHP framework for robust web applications.

### Built With:
- **Laravel 10+** – Backend framework (MVC architecture)
- **Laravel Breeze** – Simple authentication scaffolding
- **SQLite** – Database storage
- **Tailwind CSS** – Responsive frontend design

---

## Prerequisites 📦 (with Laravel Herd Support)
#### Laravel Herd 
- [Laravel Herd](https://herd.laravel.com) – Lightning-fast, free local dev environment for Laravel
- macOS or Windows 10
- PHP >= 8.1 (Herd includes this by default)
- Composer
- SQLite

> 💡 **Why use Herd?** No need to manually configure Apache/Nginx or MySQL. Herd handles everything with zero configuration.

### 🚀 Installation (with Laravel Herd Instructions)

#### For All Users

1. **Clone the repository**
```bash
git clone https://github.com/thesushilsharma/Voting_System.git
cd Voting_System
```

2. **Install PHP dependencies**
```bash
composer install
```

3. **Create the `.env` file**
```bash
cp .env.example .env
```

4. **Generate app key**
```bash
php artisan key:generate
```

---

5. **Add your project to Herd**
```bash
herd add .
```
> This creates a local site at `http://Voting_System.test`

6. **Start the queue worker (if needed)**
```bash
herd queue
```

7. **Open in browser**
👉 Visit: [http://Voting_System.test](http://Voting_System.test)

> 🔒 Herd automatically handles HTTPS via Laravel's `herd` CA.

8. **Run migrations**
```bash
herd artisan migrate --seed
```

9. **Compile frontend assets**
```bash
npm install
npm run dev
```

> Herd uses the system-installed PHP and Node, so ensure they’re up to date.

---

## 🔐 How It Works

| Component         | Description |
|------------------|-----------|
| **Voter Login**  | Eligible voters log in securely using unique credentials or tokens |
| **Admin Panel**  | Full control over elections, ballots, voters, and results |
| **Authentication** | Powered by Laravel Fortify/Breeze – secure session management |
| **Real-Time Monitoring** | View active voters, turnout stats, and progress instantly |
| **Database Layer** | All user data and votes stored safely in SQLite with encryption at rest (optional) |

---

## 🧪 Known Issues
- None at this time.  
Have an issue? Please report it in the [Issues](https://github.com/thesushilsharma/Voting_System/issues) section.

---

## 🤝 Contributing
To contribute to this project, please submit any issues or pull requests to the GitHub repository.

---

## 📄 License
This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

---

> Developed with ❤️ for educational and organizational voting needs.  
University of ... – Innovation in Democratic Engagement
