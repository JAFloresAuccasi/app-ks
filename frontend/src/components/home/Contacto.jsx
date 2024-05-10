import React from "react";
import { Link } from "react-router-dom";
import SectionApp from "./layouts/Section";

const ContactoApp = () => {
  return (
    <div>
      <SectionApp></SectionApp>
 <section className="wrapper bg-light wrapper-border">
      <div className="container py-14 py-md-16">
        <div className="row">
          <div className="col-xl-10 mx-auto">
            <div className="row gy-10 gx-lg-8 gx-xl-12">
              <div className="col-lg-8">
                <form
                  className="contact-form"
                  method="post"
                  action="php/contact.php"
                  noValidate="true"
                >
                  <div className="messages" />
                  <div className="controls">
                    <div className="row gx-4">
                      <div className="col-md-6">
                        <div className="form-label-group mb-4">
                          <input
                            id="form_name"
                            type="text"
                            name="name"
                            className="form-control"
                            placeholder="Jane"
                            required="required"
                            data-error="Nombre requerido."
                          />
                          <label htmlFor="form_name">Nombre</label>
                          <div className="help-block with-errors" />
                        </div>
                      </div>
                      <div className="col-md-6">
                        <div className="form-label-group mb-4">
                          <input
                            id="form_email"
                            type="email"
                            name="email"
                            className="form-control"
                            placeholder="jane.doe@example.com"
                            required="required"
                            data-error="Email requerido"
                          />
                          <label htmlFor="form_email">Email</label>
                          <div className="help-block with-errors" />
                        </div>
                      </div>
                      <div className="col-md-6">
                        <div className="form-label-group mb-4">
                          <input
                            id="form_lastname"
                            type="text"
                            name="asunto"
                            className="form-control"
                            placeholder="asunto"
                            required="required"
                            data-error="Asunto requerido."
                            spellCheck="false"
                            data-ms-editor="true"
                          />
                          <label htmlFor="form_lastname">Asunto</label>
                          <div className="help-block with-errors" />
                        </div>
                      </div>
                      <div className="col-md-6">
                        <div className="form-label-group mb-4">
                          <input
                            id="form_phone"
                            type="tel"
                            name="phone"
                            className="form-control"
                            placeholder="Your phone number"
                          />
                          <label htmlFor="form_phone">Teléfono</label>
                          <div className="help-block with-errors" />
                        </div>
                      </div>
                      <div className="col-12">
                        <div className="form-label-group mb-4">
                          <textarea
                            id="form_message"
                            name="message"
                            className="form-control"
                            placeholder="Your message"
                            rows={5}
                            required="required"
                            data-error="El mensaje es obligatorio."
                            spellCheck="false"
                            data-ms-editor="true"
                            defaultValue={""}
                          />
                          <label htmlFor="form_message">Mensaje </label>
                          <div className="help-block with-errors" />
                        </div>
                      </div>
                      <div className="col-12">
                        <input
                          type="submit"
                          className="btn btn-primary rounded-pill btn-send mb-3"
                          defaultValue="Enviar mensaje"
                        />
                        <p className="text-muted">
                          <strong>*</strong>Todos los campos son obligatorios.
                        </p>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div className="col-lg-4">
                <div className="d-flex flex-row">
                  <div>
                    <h3 className="mb-2">Contactanos</h3>
                    <address>
                      Envíanos tus datos de usuario y en breve te responderemos
                    </address>
                  </div>
                </div>
                <div className="d-flex flex-row">
                  <div>
                    <div className="icon text-primary fs-28 me-4 mt-n1">
                      {" "}
                      <i className="uil uil-phone-volume" />{" "}
                    </div>
                  </div>
                  <div>
                    <h5 className="mb-1">Phone</h5>
                    <p>
                      00 (123) 456 78 90 <br className="d-none d-md-block" />
                      00 (987) 654 32 10
                    </p>
                  </div>
                </div>
                <div className="d-flex flex-row">
                  <div>
                    <div className="icon text-primary fs-28 me-4 mt-n1">
                      {" "}
                      <i className="uil uil-envelope" />{" "}
                    </div>
                  </div>
                  <div>
                    <h5 className="mb-1">E-mail</h5>
                    <p className="mb-0">
                      <a href="mailto:sandbox@email.com" className="text-body">
                        sandbox@email.com
                      </a>
                    </p>
                    <p>
                      <a href="mailto:help@sandbox.com" className="text-body">
                        help@sandbox.com
                      </a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    </div>
   
  );
}
 export default ContactoApp;