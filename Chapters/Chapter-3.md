# ✅ Chapter 3: Basic Structure of an HTML Document

---

## 📄 What Makes Up an HTML Document?

Every HTML page starts with a **standard structure** that tells the browser what kind of content it is, and how to display it.
Let’s break it down piece by piece.

---

### ✅ Boilerplate HTML (Standard Template)

Here’s a basic HTML document:

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My First Page</title>
  </head>
  <body>
    <h1>Welcome!</h1>
    <p>This is my first structured HTML page.</p>
  </body>
</html>
```

---

## 🧱 Tag-by-Tag Explanation

| Tag               | Purpose                                                  |
| ----------------- | -------------------------------------------------------- |
| `<!DOCTYPE html>` | Tells the browser this is an HTML5 document              |
| `<html>`          | The **root tag** that wraps the entire page              |
| `<head>`          | Contains **settings & metadata**, not visible content    |
| `<meta>`          | Gives browser extra info (charset, device support, etc.) |
| `<title>`         | Title that shows on browser tab                          |
| `<body>`          | The **main content** of the web page, visible to users   |

---

## 🧠 What are Tags and Attributes?

* Tags define **elements**:
  `<h1>Hello</h1>` → `h1` is the tag.

* Attributes provide **extra info** inside the opening tag:
  Example:

  ```html
  <img src="pic.jpg" alt="My Image" width="200" />
  ```

| Attribute | Example         | Description                  |
| --------- | --------------- | ---------------------------- |
| `src`     | `src="pic.jpg"` | Source of an image or file   |
| `alt`     | `alt="Text"`    | Fallback text if image fails |
| `width`   | `width="200"`   | Width in pixels              |

---

## 🔁 Paired vs Unpaired Tags

| Type         | Example           | Description                     |
| ------------ | ----------------- | ------------------------------- |
| **Paired**   | `<p>Text</p>`     | Opening + Closing tag           |
| **Unpaired** | `<br>`, `<img />` | Only opening tag (self-closing) |

---

## 💬 Comments in HTML

Use comments to add notes in your code that won’t be displayed in the browser.

```html
<!-- This is a comment -->
```

Example:

```html
<!-- Main Heading Starts Below -->
<h1>About Us</h1>
```

---

## 💡 Example: HTML with All Key Elements

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="author" content="Shubham" />
    <title>About Me</title>
  </head>
  <body>
    <!-- Heading -->
    <h1>Shubham's Portfolio</h1>
    
    <!-- Paragraph -->
    <p>I love building websites with HTML.</p>
    
    <!-- Horizontal Line -->
    <hr>

    <!-- Line Break -->
    <p>More about me...<br>I also enjoy teaching!</p>
  </body>
</html>
```

---

## 🧪 Exercise

1. Open VS Code
2. Create a file: `structure.html`
3. Use Emmet shortcut: type `html:5` and press `Tab`
4. Fill in:

   * Your own name in the `<title>`
   * Add a `<meta name="author">` tag
   * Add one heading and one paragraph in the body
5. Open with Live Server and view the result!

---

## ✅ Summary

* Every HTML page begins with a **boilerplate structure**
* The **`<head>`** holds metadata, the **`<body>`** holds the content
* Tags can be **paired** (like `<p></p>`) or **unpaired** (like `<br>`)
* Comments are written as `<!-- comment -->` for clarity