import React, { useState } from "react";
import { Link } from "react-router-dom";
import SectionApp from "../home/layouts/Section";
const RegisterUser = () => {
  return (
<div>
<SectionApp></SectionApp>
    <section className="wrapper bg-light wrapper-border">
    <div className="container py-14 py-md-16">
      <div className="row gx-md-8 gx-xl-12 gy-10 align-items-center">
        <div className="col-md-8 col-lg-6 offset-lg-0 col-xl-5 offset-xl-1 position-relative">
          <div className="shape bg-dot primary rellax w-17 h-21" data-rellax-speed={1} style={{top: '-2rem', left: '-1.4rem', transform: 'translate3d(0px, -1px, 0px) translate3d(0px, -3px, 0px)'}} />
          <figure className="rounded"><img src="img/photos/about4.jpg" srcSet="img/photos/about4@2x.jpg 2x" alt="" /></figure>
        </div>
        <div className="col-lg-6">
          <img src="img/icons/telemarketer.svg" className="svg-inject icon-svg icon-svg-md mb-4" alt="" />
          <h2 className="display-4 mb-8">Convinced yet? Let's make something great together.</h2>
          <div className="col-lg-12">
            <div className="card shadow-2-strong" style={{borderRadius: '1rem'}}>
              <div className="card-body text-center">
                <h3 className="mb-5">Sign in</h3>
                <form role="form" method="POST" action="http://my-web.test/save_usuario" acceptCharset="utf-8" encType="multipart/form-data">
                  <input type="hidden" name="_token" defaultValue="WdIYmSl1m3MxMT6gckk0fROhOTSW3KmhW2pvCkZk" />                                <div className="form-outline mb-4">
                    <input type="text" name="name" className="form-control form-control-lg" required autoComplete="disabled" />
                    <label className="form-label" htmlFor="typeEmailX-2">nombre</label>
                  </div>
                  <div className="form-outline mb-4">
                    <input type="email" name="email" className="form-control form-control-lg" required autoComplete="disabled" />
                    <label className="form-label" htmlFor="typeEmailX-2">Email</label>
                  </div>
                  <div className="form-outline mb-4">
                    <input type="password" name="password" className="form-control form-control-lg" required autoComplete="disabled" />
                    <label className="form-label" htmlFor="typePasswordX-2">Contraseña</label>
                  </div>
                  <div className="form-outline mb-4">
                    <input type="password" name="password_confirmation" className="form-control form-control-lg" required autoComplete="disabled" />
                    <label className="form-label" htmlFor="typePasswordX-2">confirmar Contraseña</label>
                  </div>
                  {/* Checkbox */}
                  <div className="form-check d-flex justify-content-start mb-4">
                    <input className="form-check-input" type="checkbox" defaultValue id="form1Example3" />
                    <label className="form-check-label" htmlFor="form1Example3">&nbsp; Remember password
                    </label>
                  </div>
                  <div className="form-check d-flex justify-content-start mb-4">
                    <Link to="/login" className="form-check-label" style={{color: 'red', textDecoration: 'underline'}} htmlFor="form1Example3">Iniciar
                      sesión</Link>
                  </div> 
                  <button className="btn btn-primary" type="submit">Guardar</button>
                </form>
                <hr className="my-4" />
                <button className="btn btn-primary mb-2" style={{backgroundColor: '#dd4b39', fontWeight: '100 !important', borderColor: 'none'}} type="submit"><i className="fab fa-google me-2" /> Inicia sesión con Google</button>
                <button className="btn btn-primary" style={{backgroundColor: '#3b5998', fontWeight: '100 !important', borderColor: 'none'}} type="submit"><i className="fab fa-facebook-f me-2" />Inicia sesión con
                  Facebook</button>
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
export default RegisterUser;
