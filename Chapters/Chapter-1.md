# ✅ Chapter 1: Introduction to HTML

---

## 📌 What is HTML?

**HTML** stands for **HyperText Markup Language**.
It is the **standard language** used to **create and structure web pages** on the internet.

> 🔖 HTML is **not a programming language** — it is a **markup language** that tells the browser how to display content.

---

## 🧠 Why Use HTML?

* To **design static web pages** like portfolios, blogs, or product pages.
* To **define the structure** of a page using tags (headings, paragraphs, lists, etc.).
* To embed **images**, **videos**, **forms**, and **links**.
* HTML is supported by **all browsers** and is the **foundation** of all websites.

---

## 📅 When Do We Use HTML?

Whenever you want to:

* Build a personal or business **website**
* Create web-based **forms** for data collection
* Publish online content like **articles** or **product info**
* Link **multimedia** (audio, video, images) with your content

---

## ⚙️ How Does HTML Work?

* HTML files are saved with the extension `.html` or `.htm`.
* A browser (like Chrome or Firefox) reads the **HTML tags** and **renders** them into visual content.
* Think of HTML like the **skeleton** of a webpage — everything else (like CSS or JS) is built around it.

---

## 💡 What Does "Render" Mean?

**Render** = "Display"
When a browser **renders** an HTML page, it **reads the code** and **displays** it visually to the user.

For example:

```html
<h1>Welcome</h1>
```

Will be rendered as:

> **Welcome** ← (Big bold heading shown by the browser)

---

## 📄 Static vs Dynamic Webpages

| Feature           | Static Webpage               | Dynamic Webpage                   |
| ----------------- | ---------------------------- | --------------------------------- |
| Content Changes   | Doesn't change automatically | Updates based on user or data     |
| Technologies Used | HTML                         | HTML + Server languages (PHP, JS) |
| Example           | Contact Page                 | Gmail Inbox                       |

---

## 🛠️ Hands-On: Create Your First HTML Page

### Step 1: Create an HTML file

Open **Notepad** or **VS Code**
Paste the following code:

```html
<!DOCTYPE html>
<html>
  <head>
    <title>My First HTML Page</title>
  </head>
  <body>
    <h1>Hello World!</h1>
    <p>This is my first web page using HTML.</p>
  </body>
</html>
```

### Step 2: Save the file

* File name: `index.html`
* Save as type: **All Files**
* Encoding: **UTF-8**
* Location: Anywhere (Desktop for now)

### Step 3: Open in Browser

* Right-click the file → Open with → **Google Chrome**
* You’ll see a simple web page that says:

  ```
  Hello World!
  This is my first web page using HTML.
  ```

---

## 🔍 Hands-On: View Source & Inspect

* **View Source**: Right-click → View Page Source
  → You’ll see your original code.

* **Inspect Element**: Right-click → Inspect
  → Explore how HTML elements are structured and styled by the browser.

---

## ✅ Summary

* HTML is a **markup language** used to build web pages.
* It uses **tags** like `<html>`, `<body>`, and `<p>` to define structure.
* **Browsers render** HTML code into visual content.
* You can start with just **Notepad** and a browser.
* HTML is the **first step** in becoming a web developer.

---

## 🧪 Exercise

Create an HTML file named `about.html` with the following:

* A main heading: **About Me**
* A paragraph describing yourself
* A second paragraph saying why you're learning HTML