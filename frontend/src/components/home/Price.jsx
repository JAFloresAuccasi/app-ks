import React from "react";
import { Link } from "react-router-dom";
import SectionApp from "./layouts/Section";

const PriceApp = () => {
  return (
    <div>
    <SectionApp/>
    <section className="wrapper bg-light wrapper-border">
      <div className="container py-14 py-md-16">
        <div className="row">
          <div className="col-lg-10 col-xl-9 col-xxl-8 mx-auto text-center">
            <h2 className="fs-20 text-uppercase text-danger mb-3">Precios</h2>
            <h3 className="display-6 mb-15 mb-md-6 px-lg-10">
              Ten tu anuncio mejor posicionado, de esta manera se elevará la
              taza de clientes en tu ciudad.
            </h3>
          </div>
        </div>
        <div className="pricing-wrapper position-relative">
          <div
            className="shape bg-dot primary rellax w-16 h-18"
            data-rellax-speed={1}
            style={{
              top: "2rem",
              right: "-2.4rem",
              transform:
                "translate3d(0px, 2px, 0px) translate3d(0px, -3px, 0px)",
            }}
          />
          <div
            className="shape rounded-circle bg-line red rellax w-18 h-18 d-none d-lg-block"
            data-rellax-speed={1}
            style={{
              bottom: "0.5rem",
              left: "-2.5rem",
              transform:
                "translate3d(0px, 32px, 0px) translate3d(0px, 19px, 0px)",
            }}
          />
          <div className="row gy-6 mt-3 mt-md-5">
            <div className="col-md-6 col-lg-4">
              <div className="pricing card text-center">
                <div className="card-body">
                  <img
                    src="img/icons/shopping-basket.svg"
                    className="svg-inject icon-svg icon-svg-md text-primary mb-3"
                    alt=""
                  />
                  <h4 className="card-title">Basic Plan</h4>
                  <div className="prices text-dark">
                    <div className="price price-show">
                      <span className="price-currency">$</span>
                      <span className="price-value">9</span>{" "}
                      <span className="price-duration">month</span>
                    </div>
                    <div className="price price-hide price-hidden">
                      <span className="price-currency">$</span>
                      <span className="price-value">99</span>{" "}
                      <span className="price-duration">year</span>
                    </div>
                  </div>
                  <ul className="icon-list bullet-bg bullet-soft-primary mt-8 mb-9 text-start">
                    <li>
                      <i className="uil uil-check" />
                      <span>
                        <strong>1</strong> Project{" "}
                      </span>
                    </li>
                    <li>
                      <i className="uil uil-check" />
                      <span>
                        <strong>100K</strong> API Access{" "}
                      </span>
                    </li>
                    <li>
                      <i className="uil uil-check" />
                      <span>
                        <strong>100MB</strong> Storage{" "}
                      </span>
                    </li>
                    <li>
                      <i className="uil uil-times bullet-soft-red" />
                      <span>
                        {" "}
                        Weekly <strong>Reports</strong>{" "}
                      </span>
                    </li>
                    <li>
                      <i className="uil uil-times bullet-soft-red" />
                      <span>
                        {" "}
                        7/24 <strong>Support</strong>
                      </span>
                    </li>
                  </ul>
                  <a href="#" className="btn btn-primary rounded-pill">
                    Choose Plan
                  </a>
                </div>
              </div>
            </div>
            <div className="col-md-6 col-lg-4 popular">
              <div className="pricing card text-center">
                <div className="card-body">
                  <img
                    src="img/icons/home.svg"
                    className="svg-inject icon-svg icon-svg-md text-primary mb-3"
                    alt=""
                  />
                  <h4 className="card-title">Premium Plan</h4>
                  <div className="prices text-dark">
                    <div className="price price-show">
                      <span className="price-currency">$</span>
                      <span className="price-value">19</span>{" "}
                      <span className="price-duration">month</span>
                    </div>
                    <div className="price price-hide price-hidden">
                      <span className="price-currency">$</span>
                      <span className="price-value">199</span>{" "}
                      <span className="price-duration">year</span>
                    </div>
                  </div>
                  <ul className="icon-list bullet-bg bullet-soft-primary mt-8 mb-9 text-start">
                    <li>
                      <i className="uil uil-check" />
                      <span>
                        <strong>5</strong> Projects{" "}
                      </span>
                    </li>
                    <li>
                      <i className="uil uil-check" />
                      <span>
                        <strong>100K</strong> API Access{" "}
                      </span>
                    </li>
                    <li>
                      <i className="uil uil-check" />
                      <span>
                        <strong>200MB</strong> Storage{" "}
                      </span>
                    </li>
                    <li>
                      <i className="uil uil-check" />
                      <span>
                        {" "}
                        Weekly <strong>Reports</strong>
                      </span>
                    </li>
                    <li>
                      <i className="uil uil-times bullet-soft-red" />
                      <span>
                        {" "}
                        7/24 <strong>Support</strong>
                      </span>
                    </li>
                  </ul>
                  <a href="#" className="btn btn-primary rounded-pill">
                    Choose Plan
                  </a>
                </div>
              </div>
            </div>
            <div className="col-md-6 offset-md-3 col-lg-4 offset-lg-0">
              <div className="pricing card text-center">
                <div className="card-body">
                  <img
                    src="img/icons/briefcase-2.svg"
                    className="svg-inject icon-svg icon-svg-md text-primary mb-3"
                    alt=""
                  />
                  <h4 className="card-title">Corporate Plan</h4>
                  <div className="prices text-dark">
                    <div className="price price-show">
                      <span className="price-currency">$</span>
                      <span className="price-value">49</span>{" "}
                      <span className="price-duration">month</span>
                    </div>
                    <div className="price price-hide price-hidden">
                      <span className="price-currency">$</span>
                      <span className="price-value">499</span>{" "}
                      <span className="price-duration">year</span>
                    </div>
                  </div>
                  <ul className="icon-list bullet-bg bullet-soft-primary mt-8 mb-9 text-start">
                    <li>
                      <i className="uil uil-check" />
                      <span>
                        <strong>20</strong> Projects{" "}
                      </span>
                    </li>
                    <li>
                      <i className="uil uil-check" />
                      <span>
                        <strong>300K</strong> API Access{" "}
                      </span>
                    </li>
                    <li>
                      <i className="uil uil-check" />
                      <span>
                        <strong>500MB</strong> Storage{" "}
                      </span>
                    </li>
                    <li>
                      <i className="uil uil-check" />
                      <span>
                        {" "}
                        Weekly <strong>Reports</strong>
                      </span>
                    </li>
                    <li>
                      <i className="uil uil-check" />
                      <span>
                        {" "}
                        7/24 <strong>Support</strong>
                      </span>
                    </li>
                  </ul>
                  <a href="#" className="btn btn-primary rounded-pill">
                    Choose Plan
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    </div>
  );
};
export default PriceApp;
