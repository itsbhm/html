# ✅ Chapter 7: Forms and Inputs in HTML

---

## 📥 What is a Form in HTML?

A **form** is used to **collect user input** like names, emails, feedback, login info, etc.

All form elements go inside a `<form>` tag.

```html
<form>
  <!-- Input elements go here -->
</form>
```

---

## 🏷️ The `<form>` Tag

### Key Attributes:

| Attribute | Purpose                                 |
| --------- | --------------------------------------- |
| `action`  | URL where data is sent after submission |
| `method`  | How data is sent: `GET` or `POST`       |

```html
<form action="/submit-form" method="post">
  <!-- Inputs -->
</form>
```

---

## 🔠 Input Types: The `<input>` Tag

### Common Input Fields:

```html
<input type="text" />
<input type="email" />
<input type="password" />
<input type="radio" />
<input type="checkbox" />
<input type="submit" />
<input type="reset" />
```

---

### Example with Labels:

```html
<form>
  <label for="name">Name:</label>
  <input type="text" id="name" name="username" />

  <br>

  <label for="email">Email:</label>
  <input type="email" id="email" name="useremail" />
</form>
```

✅ Always associate `<label>` with `<input>` using the `for` and `id`.

---

## 🔘 Radio Buttons and Checkboxes

### Radio (select one):

```html
<p>Gender:</p>
<input type="radio" name="gender" value="male" /> Male
<input type="radio" name="gender" value="female" /> Female
```

### Checkbox (select multiple):

```html
<p>Skills:</p>
<input type="checkbox" name="skill" value="html" /> HTML
<input type="checkbox" name="skill" value="css" /> CSS
```

---

## ✍️ Textarea for Multi-Line Input

```html
<label for="msg">Message:</label><br>
<textarea id="msg" name="message" rows="4" cols="40"></textarea>
```

---

## 🔽 Dropdown with `<select>`

```html
<label for="course">Choose a course:</label>
<select id="course" name="course">
  <option value="html">HTML</option>
  <option value="css">CSS</option>
  <option value="js">JavaScript</option>
</select>
```

---

## 🧩 Fieldset and Legend

Use `<fieldset>` to group form fields and `<legend>` for the title.

```html
<fieldset>
  <legend>Personal Info</legend>
  <label>Name: <input type="text" /></label>
</fieldset>
```

---

## 💡 Hands-On Project: Registration Form

### Create a file `register.html`

```html
<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
</head>
<body>

  <h1>User Registration</h1>

  <form action="/submit" method="post">
    
    <label for="name">Full Name:</label><br>
    <input type="text" id="name" name="fullname" required /><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" /><br><br>

    <p>Gender:</p>
    <input type="radio" name="gender" value="male" /> Male
    <input type="radio" name="gender" value="female" /> Female<br><br>

    <p>Skills:</p>
    <input type="checkbox" name="skills" value="html" /> HTML
    <input type="checkbox" name="skills" value="css" /> CSS<br><br>

    <label for="course">Course:</label>
    <select id="course" name="course">
      <option value="frontend">Frontend</option>
      <option value="backend">Backend</option>
    </select><br><br>

    <label for="message">Message:</label><br>
    <textarea id="message" rows="4" cols="30"></textarea><br><br>

    <input type="submit" value="Register" />
    <input type="reset" value="Clear" />

  </form>

</body>
</html>
```

🧪 Open it with Live Server → Try filling and resetting the form!

---

## ✅ Summary

* Forms collect user data using the `<form>` tag.
* Input types include `text`, `email`, `password`, `radio`, `checkbox`, `submit`, and more.
* Use `<label>` for accessibility.
* `<textarea>` is used for large input.
* `<select>` and `<option>` create dropdowns.
* `<fieldset>` and `<legend>` group fields meaningfully.

---

## 🧪 Exercise

1. Create `contact-form.html`
2. Add:

   * Name, Email, Message fields
   * Gender radio options
   * Skill checkboxes
   * A submit and reset button
