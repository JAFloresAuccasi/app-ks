import React from 'react'

const FooterApp = () =>{
    return (
  <div>
        <footer className="bg-dark text-inverse">
          <div className="container py-13 py-md-15">
            <div className="row gy-6 gy-lg-0">
              <div className="col-lg-4">
                <div className="widget">
                  <img className="mb-4" src="img/logo-light.png" srcSet="img/logo-light@2x.png 2x" alt="" />
                  <p className="mb-4">© 2021 Sandbox. All rights reserved.</p>
                  <nav className="nav social social-white">
                    <a href="#"><i className="uil uil-twitter" /></a>
                    <a href="#"><i className="uil uil-facebook-f" /></a>
                    <a href="#"><i className="uil uil-dribbble" /></a>
                    <a href="#"><i className="uil uil-instagram" /></a>
                    <a href="#"><i className="uil uil-youtube" /></a>
                  </nav>
                </div>
              </div>
              <div className="col-md-4 col-lg-2 offset-lg-2">
                <div className="widget">
                  <h4 className="widget-title mb-3 text-white">Need Help?</h4>
                  <ul className="list-unstyled mb-0">
                    <li><a href="#">Support</a></li>
                    <li><a href="#">Get Started</a></li>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                  </ul>
                </div>
              </div>
              <div className="col-md-4 col-lg-2">
                <div className="widget">
                  <h4 className="widget-title mb-3 text-white">Learn More</h4>
                  <ul className="list-unstyled mb-0">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Our Story</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Features</a></li>
                  </ul>
                </div>
              </div>
              <div className="col-md-4 col-lg-2">
                <div className="widget">
                  <h4 className="widget-title mb-3 text-white">Get in Touch</h4>
                  <address>Moonshine St. 14/05 Light City, London, United Kingdom</address>
                  <a href="mailto:first.last@email.com">info@email.com</a><br /> +00 (123) 456 78 90
                </div>
              </div>
            </div>
          </div>
        </footer>
        <div className="progress-wrap">
      <svg className="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
    </div>
  </div>
      );
    };
    export default FooterApp;