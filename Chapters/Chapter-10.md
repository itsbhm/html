# ✅ Chapter 10: HTML SEO Essentials

---

## 🔍 What is SEO?

**SEO** stands for **Search Engine Optimization** — it’s about making your website easily **findable**, **readable**, and **relevant** for search engines like Google, Bing, etc.

In HTML, certain tags and practices help improve how your site appears in search results.

---

## 🎯 Why is SEO Important?

* Increases **visibility** and **traffic** to your site
* Helps search engines understand your content
* Improves user experience and accessibility

---

## 🏷️ Essential HTML Tags for SEO

---

### 1️⃣ `<title>`

* Defines the page title (shown on browser tabs and Google search)

```html
<title>Learn HTML in 10 Days - OpenFox Academy</title>
```

✅ Keep it under 60 characters
✅ Use unique title for each page

---

### 2️⃣ `<meta name="description">`

* Gives a short summary (shown in search results)

```html
<meta name="description" content="Beginner-friendly HTML course with real examples and projects. Learn to build web pages step-by-step.">
```

✅ Keep under 160 characters
✅ Make it meaningful and include keywords

---

### 3️⃣ `<meta name="author">`

* Tells who created the content

```html
<meta name="author" content="Shubham V." />
```

---

### 4️⃣ Favicon

The small icon shown on browser tabs.

```html
<link rel="icon" href="favicon.ico" type="image/x-icon">
```

Place `favicon.ico` in your project root or a folder like `images/`.

---

### 5️⃣ Semantic Tags Help SEO

Search engines give more weight to content inside:

* `<header>`, `<main>`, `<article>`, `<section>`, `<nav>`, `<footer>`

Example:

```html
<article>
  <h2>HTML Basics</h2>
  <p>HTML stands for HyperText Markup Language...</p>
</article>
```

---

### 6️⃣ Alt Text in Images

Search engines **can’t see images** — so use `alt` for description:

```html
<img src="coding.jpg" alt="Student learning HTML on laptop">
```

✅ Helps visually impaired users
✅ Boosts image SEO

---

## 🚦 Use Lighthouse Tool (Built into Chrome)

### Steps:

1. Open your site in Chrome
2. Right-click → **Inspect**
3. Go to **Lighthouse** tab
4. Select **SEO** and run the audit
5. You’ll get suggestions to improve

---

## 💡 Hands-On Task: Create SEO-Friendly Page

### File: `seo.html`

```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Beginner HTML tutorial by OneSpider - Learn to code websites" />
  <meta name="author" content="Shubham V." />
  <title>HTML Tutorial for Beginners - OneSpider</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>

  <header>
    <h1>Welcome to My HTML Tutorial</h1>
  </header>

  <main>
    <article>
      <h2>Why HTML Matters</h2>
      <p>HTML is the foundation of all websites...</p>
      <img src="html5.png" alt="HTML5 logo" width="200">
    </article>
  </main>

  <footer>
    <p>&copy; 2025 OneSpider</p>
  </footer>

</body>
</html>
```

---

## ✅ Summary

* Use `<title>`, `<meta description>`, and `<meta author>` for better indexing
* Always include `alt` text in images
* Use **semantic structure** for cleaner HTML
* Favicon makes your site look polished
* Audit your page using **Chrome Lighthouse**

---

## 🧪 Exercise

1. Create a file `audit.html`
2. Add:

   * Proper title and meta tags
   * An image with meaningful alt text
   * Semantic layout (`<header>`, `<main>`, etc.)
3. Open in Chrome → Run Lighthouse → Check SEO score
