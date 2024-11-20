import React from 'react';
import ReactDOM from 'react-dom/client';

function Footer() {
  return (
    <footer className="footer">
      <div className="footer__content container">
        <div className="footer__links">
          <a href="/privacy-policy" className="footer__link">
            Privacy Policy
          </a>
          <a href="/terms-of-service" className="footer__link">
            Terms of Service
          </a>
          <a href="/contact" className="footer__link">
            Contact Us
          </a>
        </div>
        <p className="footer__copyright">
          &copy; {new Date().getFullYear()} My Website. All rights reserved.
        </p>
      </div>
    </footer>
  );
}

const footer = document.getElementById('footer');
if (footer) {
  const root = ReactDOM.createRoot(footer);
  root.render(<Footer />);
} else {
  console.error("Element with ID 'footer' not found.");
}
