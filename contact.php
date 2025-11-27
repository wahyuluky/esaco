<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Esaco Contact Us</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<style>
/* Hero Contact Title */
.contact-hero {
  background: linear-gradient(90deg, #2563eb 0%, #3b82f6 100%);
  color: white;
  text-align: center;
  padding: 56px 20px 40px 20px;
  font-weight: 700;
  font-size: 2rem;
  user-select: none;
}

/* Contact Form Section */
section.contact-section {
  background: white;
  padding: 48px 20px 72px 20px;
  border-radius: 20px 20px 0 0;
  margin-top: -40px;
  box-shadow: 0 4px 30px rgb(0 0 0 / 0.1);
  max-width: 1200px;
  margin-left: auto;
  margin-right: auto;
  display: flex;
  gap: 60px;
  flex-wrap: wrap;
  justify-content: center;
}

    .contact-info {
      flex: 1 1 340px;
      max-width: 400px;
    }
    .contact-info h2 {
      margin: 0 0 6px 0;
      font-weight: 900;
      font-size: 1.5rem;
    }
    .contact-info p {
      margin: 0 0 28px 0;
      font-weight: 600;
      color: #444;
      font-size: 0.9rem;
    }
    .contact-contact-box {
      display: flex;
      flex-direction: column;
      gap: 16px;
    }
.faq-grid {
  display: flex;
  flex-direction: column;
  gap: 1rem; /* Space between FAQ items */
}

.faq-item {
  border: 1px solid #e0e0e0; /* Light border for separation */
  border-radius: 5px; /* Rounded corners */
  overflow: hidden; /* Prevent overflow */
}

.faq-accordion {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1rem; /* Padding for better touch targets */
  cursor: pointer; /* Pointer cursor for clickable items */
  background-color: #f9f9f9; /* Light background */
  transition: background-color 0.3s; /* Smooth transition */
}

.faq-accordion:hover {
  background-color: #e0f7fa; /* Highlight on hover */
}

.faq-panel {
  padding: 1rem; /* Padding for the answer */
  background-color: #ffffff; /* White background for answers */
  border-top: 1px solid #e0e0e0; /* Border between question and answer */
}
#notification {
  position: fixed;
  top: 20px;
  right: 20px;
  z-index: 9999;
}

.toast {
  padding: 12px 18px;
  margin-bottom: 10px;
  border-radius: 8px;
  color: #fff;
  font-size: 14px;
  animation: fadein 0.5s, fadeout 0.5s 3.5s;
}

.toast.success { background-color: #28a745; }
.toast.error   { background-color: #dc3545; }
.toast.warning { background-color: #ffc107; color: #333; }

@keyframes fadein {
  from { opacity: 0; transform: translateY(-10px); }
  to   { opacity: 1; transform: translateY(0); }
}

@keyframes fadeout {
  from { opacity: 1; }
  to   { opacity: 0; transform: translateY(-10px); }
}

</style>

<?php 
include 'connect.php';
include 'header.php'; 
?>

<div class="contact-hero" role="banner" aria-label="Contact Us Page Title">
  Contact Us
</div>

<section class="contact-section" aria-labelledby="contact-form-title">
  <div class="contact-info">
    <h2 id="contact-form-title">How can I help you?</h2>
    <p>Fill in the form or drop an email</p>
    <div class="contact-contact-box" role="list" aria-label="Contact Info">
      <div class="contact-box" role="listitem" tabindex="-1" aria-label="Phone Number (031) 99855516">
        <svg aria-hidden="true" viewBox="0 0 24 24" role="img" focusable="false"><path d="M2 3.5C2 3.2 2.2 3 2.5 3H6.4c.4 0 .7.3.8.6l1.7 3.8c.1.3-.1.7-.4.8l-2 1c.9 2.3 2.7 4.2 5 5l1-2c.1-.3.5-.5.8-.4l3.8 1.8c.3.1.6.4.6.8v3.8c0 .3-.3.5-.6.5-8.8 0-15.9-7.2-15.9-16Z" fill="#2563eb" /></svg>
        (031) 99855516
      </div>
      <div class="contact-box" role="listitem" tabindex="-1" aria-label="Email esaco@gmail.com">
        <svg aria-hidden="true" viewBox="0 0 24 24" role="img" focusable="false"><path d="M20 6v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2ZM4.4 7.1v12.7h15.2V7.1l-7.6 6.7-7.6-6.7Z" fill="#2563eb" /></svg>
        esaco@gmail.com
      </div>
      <div class="contact-box" role="listitem" tabindex="-1" aria-label="Website URL http://esaco.co.id/">
        <svg aria-hidden="true" viewBox="0 0 24 24" role="img" focusable="false"><path d="M16.6 4.6c4.7 5.4 4.1 14.1-1.3 18.7a13.38 13.38 0 0 1-9.3 3.3c-4.8-.3-8.6-4.8-8.2-9.7a11.4 11.4 0 0 1 3.6-7.3 12.46 12.46 0 0 1 11.5-5q3.3.3 4.2 0Zm-3.9 11.5c-1.6 1.7-4.3 1.2-5-1.1-.5-1.44.4-3.29 2.5-3.51a2.15 2.15 0 0 1 2.8 2.7Z" fill="#2563eb"/></svg> 
        http://esaco.co.id/
      </div>
    </div>
  </div>
<form class="contact-form" action="send_email.php" method="POST" novalidate aria-describedby="form-instructions">
  <input type="text" name="fullname" id="fullname" placeholder="Full Name" required aria-required="true" autocomplete="name" />
  <input type="email" name="email" id="email" placeholder="Email" required aria-required="true" autocomplete="email" />
  <input type="tel" name="phone" id="phone" placeholder="Phone" autocomplete="tel" />
  <textarea name="message" id="message" placeholder="Message" rows="5" required aria-required="true"></textarea>
  <button type="submit" aria-label="Send Message">Send Message</button>
</form>

<div id="notification"></div>

<section class="faq-section" aria-labelledby="faq-title">
  <h3 id="faq-title">Frequently Asked Questions</h3>
  <div class="faq-grid">

    <article class="faq-general" tabindex="0" aria-label="General FAQ description and find out more button">
      <p>Punya pertanyaan? Temukan jawabannya di sini. Kami telah merangkum berbagai pertanyaan yang paling sering diajukan agar Anda bisa mendapatkan informasi secara cepat, jelas, dan tanpa repot.</p>
      <button class="faq-btn" aria-label="Find Out More about FAQ topics" type="button">Find Out More</button>
    </article>

    <div class="faq-item">
      <article class="faq-accordion" tabindex="0" aria-expanded="false" role="button" aria-controls="faq1" id="faq1-header">
        <span>What does business consulting do?</span>
        <svg aria-hidden="true" focusable="false" viewBox="0 0 20 20"><path d="M5 8l5 5 5-5H5z" fill="#444"/></svg>
      </article>
      <div class="faq-panel" id="faq1" role="region" aria-labelledby="faq1-header" hidden>
        <p>Business consulting helps organizations improve performance through analysis and solutions.</p>
      </div>
    </div>

    <div class="faq-item">
      <article class="faq-accordion" tabindex="0" aria-expanded="false" role="button" aria-controls="faq2" id="faq2-header">
        <span>What industries do you specialize in?</span>
        <svg aria-hidden="true" focusable="false" viewBox="0 0 20 20"><path d="M5 8l5 5 5-5H5z" fill="#444"/></svg>
      </article>
      <div class="faq-panel" id="faq2" role="region" aria-labelledby="faq2-header" hidden>
        <p>We specialize in manufacturing, technology, retail, finance, and health care industries.</p>
      </div>
    </div>

    <div class="faq-item">
      <article class="faq-accordion" tabindex="0" aria-expanded="false" role="button" aria-controls="faq3" id="faq3-header">
        <span>How does the process work?</span>
        <svg aria-hidden="true" focusable="false" viewBox="0 0 20 20"><path d="M5 8l5 5 5-5H5z" fill="#444"/></svg>
      </article>
      <div class="faq-panel" id="faq3" role="region" aria-labelledby="faq3-header" hidden>
        <p>Our process begins with consultation, analysis, implementation, and then follow-up support.</p>
      </div>
    </div>

    <div class="faq-item">
      <article class="faq-accordion" tabindex="0" aria-expanded="false" role="button" aria-controls="faq4" id="faq4-header">
        <span>How does the process work?</span>
        <svg aria-hidden="true" focusable="false" viewBox="0 0 20 20"><path d="M5 8l5 5 5-5H5z" fill="#444"/></svg>
      </article>
      <div class="faq-panel" id="faq4" role="region" aria-labelledby="faq4-header" hidden>
        <p>Our process is tailored for each client to ensure maximum success and satisfaction.</p>
      </div>
    </div>

  </div>
  </section>
</section>

<?php include 'footer.php'; ?>
  

<script>
document.addEventListener("DOMContentLoaded", () => {
  const form = document.querySelector(".contact-form");
  form.addEventListener("submit", function(e) {
    const fullname = document.getElementById("fullname").value.trim();
    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const message = document.getElementById("message").value.trim();
    let errors = [];

    if (fullname.length < 3) {
      errors.push("Full name must be at least 3 characters.");
    }

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
      errors.push("Please enter a valid email address.");
    }

    const phonePattern = /^[0-9+\-\s]{8,15}$/;
    if (phone && !phonePattern.test(phone)) {
      errors.push("Please enter a valid phone number (8–15 digits).");
    }

    if (message.length < 10) {
      errors.push("Message must be at least 10 characters.");
    }

    if (errors.length > 0) {
      e.preventDefault();
      const notifContainer = document.getElementById("notification");
      notifContainer.innerHTML = ""; // hapus notifikasi lama
      const notif = document.createElement("div");
      notif.className = "toast warning";
      notif.textContent = "⚠️ " + errors.join(" ");
      notifContainer.appendChild(notif);
      setTimeout(() => notif.remove(), 4000);
    }
  });
});
</script>

</body>
</html>

