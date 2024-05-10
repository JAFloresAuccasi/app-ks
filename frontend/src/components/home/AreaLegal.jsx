import {React} from "react";
import { Link } from "react-router-dom";
import SectionApp from "./layouts/Section";


const AreaLegalApp = () => {
  return (
    <div>
      <SectionApp/>
    <div className="container">
      <div className="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-20 align-items-center mt-4">
        <div className="col-md-8 col-lg-6 order-lg-2 position-relative">
          <div
            className="shape bg-soft-primary rounded-circle rellax w-20 h-20"
            data-rellax-speed={1}
            style={{
              top: "-2rem",
              right: "-1.9rem",
              transform: "translate3d(0px, 8px, 0px)",
            }}
          />
          <figure className="rounded">
            <img
              src="img/photos/about11.jpg"
              srcSet="img/photos/about11@2x.jpg 2x"
              alt=""
            />
          </figure>
        </div>
        <div className="col-lg-6">
          <h2 className="display-4 mb-3">What We Do?</h2>
          <p className="lead fs-lg mb-8 pe-xxl-2">
            The full service we are offering is{" "}
            <span className="underline">specifically</span> designed to meet
            your business needs and projects.
          </p>
          <div className="row gx-xl-10 gy-6">
            <div className="col-md-6 col-lg-12 col-xl-6">
              <div className="d-flex flex-row">
                <div>
                  <img
                    src="img/icons/megaphone.svg"
                    className="svg-inject icon-svg icon-svg-sm text-primary me-5"
                    alt=""
                  />
                </div>
                <div>
                  <h4 className="mb-1">Marketing</h4>
                  <p className="mb-0">
                    Nulla vitae elit libero pharetra augue dapibus.
                  </p>
                </div>
              </div>
            </div>
            <div className="col-md-6 col-lg-12 col-xl-6">
              <div className="d-flex flex-row">
                <div>
                  <img
                    src="img/icons/target.svg"
                    className="svg-inject icon-svg icon-svg-sm text-primary me-5"
                    alt=""
                  />
                </div>
                <div>
                  <h4 className="mb-1">Strategy</h4>
                  <p className="mb-0">
                    Vivamus sagittis lacus augue laoreet vel.
                  </p>
                </div>
              </div>
            </div>
            <div className="col-md-6 col-lg-12 col-xl-6">
              <div className="d-flex flex-row">
                <div>
                  <img
                    src="img/icons/settings-3.svg"
                    className="svg-inject icon-svg icon-svg-sm text-primary me-5"
                    alt=""
                  />
                </div>
                <div>
                  <h4 className="mb-1">Development</h4>
                  <p className="mb-0">
                    Cras mattis consectetur purus sit amet.
                  </p>
                </div>
              </div>
            </div>
            <div className="col-md-6 col-lg-12 col-xl-6">
              <div className="d-flex flex-row">
                <div>
                  <img
                    src="img/icons/bar-chart.svg"
                    className="svg-inject icon-svg icon-svg-sm text-primary me-5"
                    alt=""
                  />
                </div>
                <div>
                  <h4 className="mb-1">Data Analysis</h4>
                  <p className="mb-0">
                    Aenean lacinia bibendum nulla sed consectetur.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  );
};

export default AreaLegalApp;
// /* const response = await axios.get(`${endpoint}`)