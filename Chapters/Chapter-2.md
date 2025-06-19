# ✅ Chapter 2: Setting Up the Environment

---

## 🛠 Why Do You Need a Code Editor?

HTML can be written in any text editor (like Notepad), but using a **code editor** makes your life easier by offering:

* Syntax highlighting (colors for tags and attributes)
* Code suggestions and auto-completion
* Error detection
* Extensions for productivity (like Live Server)

---

## 🧰 Recommended Editors

| Editor        | Features                                   |
| ------------- | ------------------------------------------ |
| **VS Code**   | Fast, free, extensions, great UI           |
| **Notepad++** | Lightweight, tabbed editing, Windows-based |
| **Sublime**   | Smooth performance, but not fully free     |

✅ We’ll use **VS Code (Visual Studio Code)** in this course.

---

## 💻 Installing VS Code

### Step-by-Step:

1. Go to [https://code.visualstudio.com](https://code.visualstudio.com)
2. Click **Download** (choose Windows/macOS/Linux)
3. Run the installer and follow the instructions
4. Once installed, launch **VS Code**

---

## 🚀 Installing Live Server Extension

**Live Server** lets you preview your HTML file in a browser and reloads automatically on save.

### How to Install:

1. Open VS Code
2. Go to **Extensions** (or press `Ctrl + Shift + X`)
3. Search for **Live Server**
4. Click **Install** on the extension by **Ritwick Dey**

Now you’re ready to run your HTML pages in real-time!

---

## 🧪 Hands-On: Create and Run Your First Web Page

### Step 1: Create a new file

* Open VS Code
* Go to **File → New File**
* Save it as `index.html`

### Step 2: Add basic HTML code

```html
<!DOCTYPE html>
<html>
  <head>
    <title>My Web Page</title>
  </head>
  <body>
    <h1>Hello from VS Code!</h1>
    <p>This page is running with Live Server.</p>
  </body>
</html>
```

### Step 3: Run with Live Server

* Right-click anywhere in the editor → **Open with Live Server**
* A browser window will open showing your HTML page

---

## ⚡ Emmet Abbreviations in VS Code

**Emmet** helps you write HTML faster using shortcuts.

Example:

Typing this:

```
html:5
```

Then pressing `Tab`
→ Expands into full HTML boilerplate:

```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>
<body>
  
</body>
</html>
```

Another example:
Typing `p{Hello}` + Tab → `<p>Hello</p>`

---

## ✅ Summary

* Use **VS Code** for better HTML editing experience
* Install **Live Server** for real-time preview
* HTML files should end with `.html` extension
* Use **Emmet** to write HTML faster with shortcuts

---

## 🧪 Exercise

1. Install VS Code and Live Server (if not done yet)
2. Create a file `hello.html`
3. Use Emmet to generate boilerplate
4. Add a heading and a paragraph
5. Preview it using Live Server
