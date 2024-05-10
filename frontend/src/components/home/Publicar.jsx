import React, { useState } from "react";
import { Link } from "react-router-dom";
import SectionApp from "./layouts/Section";

const endpoint = "http://localhost:8000/api/login";

const PublicarApp = () => {
  return (
    <div>
      <SectionApp></SectionApp>
      <section className="wrapper bg-light wrapper-border">
        <div className="container py-14 py-md-16">
          <div className="blog grid grid-view">
            <div
              className="row isotope gx-md-8 gy-8 mb-8"
              style={{ position: "relative", height: "325.766px" }}
            >
              <article
                className="item post col-md-6"
                style={{ position: "absolute", top: "0px", left: "0%" }}
              >
                <div className="card">
                  <div className="card-body">
                    <div className="post-header">
                      <div className="post-category text-line">
                        <Link
                          to="javascript:void(0);"
                          className="hover"
                          rel="category"
                        >
                          Deseas publicar anuncio?
                        </Link>
                      </div>
                      <h3 className="post-title h3 mt-1 mb-3">
                        <Link className="link-dark" to="javascript:void(0);">
                          Debes crear una cuenta de usuario para poder publicar
                          tu anuncio.
                        </Link>
                      </h3>
                    </div>
                    <div className="text-center">
                      <div className="post-content mb-3">
                        <Link
                          to="/login"
                          className="btn btn-soft-primary rounded-pill me-1 mb-2 mb-md-0"
                        >
                          Ya tengo una cuenta
                        </Link>
                      </div>
                      <div className="post-content">
                        <Link
                          to="/register"
                          className="btn btn-soft-primary rounded-pill me-1 mb-2 mb-md-0"
                        >
                          Crear una nueva cuenta
                        </Link>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
    </div>
  );
};
export default PublicarApp;