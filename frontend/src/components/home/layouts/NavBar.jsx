import React from "react";

import { Link, NavLink } from "react-router-dom";
// import { FaAccessibleIcon } from "react-icons/fa";
// import {BsYoutube} from "react-icons";
//export default function NavBar() {
//return (
const NavBar = () => {
  return (
    <div>
      <header className="wrapper bg-soft-primary">
        <nav className="navbar center-nav transparent position-absolute navbar-expand-lg navbar-dark caret-none">
          <div className="container flex-lg-row flex-nowrap align-items-center">
            <div className="navbar-brand w-100">
              <Link to="/">
                <img
                  className="logo-dark"
                  src="http://my-web.test/Theme/sandbox/assets/dev/img/logo-dark.png"
                  srcSet="img/logo@2x.png 2x"
                  alt=""
                />
                <img
                  className="logo-light"
                  src="http://my-web.test/Theme/sandbox/assets/dev/img/logo-light.png"
                  srcSet="img/logo-light@2x.png 2x"
                  alt=""
                />
              </Link>
            </div>
            <div className="navbar-collapse offcanvas-nav">
              {/* <div className="offcanvas-header d-lg-none d-xl-none">
              <Link to="/">
                <img
                  src="http://my-web.test/Theme/sandbox/assets/dev/img/logo-light.png"
                  srcSet="img/logo-light@2x.png 2x"
                  alt=""
                />
              </Link>
            </div> */}
              <ul className="navbar-nav">
                <li className="nav-item">
                  <Link className="nav-link" style={{ color: "#000" }} to="#!">
                    Demos
                  </Link>
                  <ul className="dropdown-menu mega-menu mega-menu-img">
                    <li className="mega-menu-content">
                      <ul className="row row-cols-1 row-cols-lg-6 gx-0 gx-lg-4 gy-lg-2 list-unstyled">
                        <li className="col">
                          <Link
                            className="nav-link dropdown-item"
                            style={{ color: "#000" }}
                            to="/"
                          >
                            <figure className="rounded lift d-none d-lg-block">
                              <img
                                src="../public/img/demos/vc8.jpg"
                                srcSet="img/demos/mi1@2x.jpg 2x"
                                alt=""
                              />
                            </figure>
                            <span className="d-lg-none">Demo I</span>
                          </Link>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li className="nav-item dropdown">
                  <NavLink
                    className="nav-link"
                    style={{ color: "#000" }}
                    to="/"
                  >
                    Home
                  </NavLink>
                </li>
                <li className="nav-item dropdown">
                  <Link className="nav-link" style={{ color: "#000" }} to="/">
                    categorias
                  </Link>
                </li>
                <li className="nav-item dropdown">
                  <NavLink
                    className="nav-link"
                    style={{ color: "#000" }}
                    to="/login"
                  >
                    Publicar test_politc
                  </NavLink>
                </li>
              </ul>
            </div>
            <div className="navbar-other w-100 d-flex ms-auto">
              <ul
                className="navbar-nav flex-row align-items-center ms-auto"
                data-sm-skip="true"
              >
                {/* <li className="nav-item dropdown language-select text-uppercase">
                <a
                  className="nav-link dropdown-item dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >En
                </a>
                <ul className="dropdown-menu">
                  <li className="nav-item">
                    <a className="dropdown-item" href="#">
                      En
                    </a>
                  </li>
                  <li className="nav-item">
                    <a className="dropdown-item" href="#">
                      De
                    </a>
                  </li>
                  <li className="nav-item">
                    <a className="dropdown-item" href="#">
                      Es
                    </a>
                  </li>
                </ul>
              </li> */}
                <li className="nav-item">
                  <a className="nav-link" data-toggle="offcanvas-info">
                    <i
                      className="fa-solid fa-circle-info fa-beat fa-2xl"
                      style={{ color: "#2e67b2" }}
                    />
                  </a>
                </li>
                <li className="nav-item d-lg-none">
                  <div className="navbar-hamburger">
                    <button
                      className="hamburger animate plain"
                      data-toggle="offcanvas-nav"
                    >
                      <span />
                    </button>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <div className="offcanvas-info text-inverse" style={{backgroundColor: '#fff'}}>
          <button
            type="button"
            className="fa-solid fa-x fa-xl btn-close offcanvas-close"
            aria-label="Close"
            style={{ color: '#000', fontFamily: 'Unicons'}}></button>
          {/* <a href="index.html">
            <img
              className="mb-3"
              src="img/logo-light.png"
              srcSet="img/logo-light@2x.png 2x"
              alt=""
            />
          </a> */}
          <div className="widget">
            <h4 className="widget-title text-white mb-2 text-danger">Menu</h4>
            <ul className="list-unstyled">
              <li>
                <Link to="/publicar" className="btn btn-primary me-1 mb-2 mb-md-0"
                  style={{backgroundColor: '#ffbf00',
                          borderColor: '#ffbf00'}}
                ><i className="fa-solid fa-bullhorn fa-beat fa-xl" style={{color: '#ffffff'}}></i>&nbsp;&nbsp;Publicar Anuncio</Link>
              </li>
              <li>
                <Link to="/precios" className="btn btn-primary me-1 mb-2 mb-md-0"
                  style={{backgroundColor: '#038d12c2',
                          borderColor: '#038d12c2'}}
                ><i className="fa-solid fa-dollar-sign fa-beat fa-xl" style={{color: '#ffffff'}}></i>&nbsp;&nbsp;Precios</Link>
              </li>
              <li>
                <Link to="/admin" className="btn btn-primary me-1 mb-2 mb-md-0"
                style={{backgroundColor: '#ff7300',
                        borderColor: '#ff7300'}}
                ><i className="fa-solid fa-unlock-keyhole fa-xl" style={{color: '#ffffff'}}></i>&nbsp;&nbsp;Admin</Link>
              </li>
              <li>
                <Link to="/contacto" className="btn btn-primary me-1 mb-2 mb-md-0"
                ><i className="fa-solid fa-phone fa-xl" style={{color: '#ffffff'}}></i>&nbsp;&nbsp;Contacto</Link>
              </li>
              <li>
                <Link
                  to="/area-legal"
                  className="btn btn-primary me-1 mb-2 mb-md-0"
                  style={{backgroundColor: '#64024c',
                          borderColor: '#64024c'}}
                ><i className="fa-solid fa-scale-balanced fa-xl" style={{color: '#ffffff'}}></i>&nbsp;&nbsp;
                  Area Legal
                </Link>
              </li>
            </ul>
          </div>
        </div>
      </header>
    </div>
  );
};
export default NavBar;
