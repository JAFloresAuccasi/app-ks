// import { useState } from "react";
// import reactLogo from "./assets/react.svg";
// import viteLogo from "/vite.svg";
// import "./App.css";
import React from "react";
import { BrowserRouter, Route, Routes } from "react-router-dom";


if (typeof window !== 'undefined') {
  import("../public/js/theme.js")
  import("../public/js/plugin.js")
}

import LoginUser from "./components/customers/LoginUser";
import RegisterUser from "./components/customers/RegisterUser";

import InitApp from './components/home/InitApp'
import PublicarApp from "./components/home/Publicar";
import PriceApp from "./components/home/Price";
import AdminApp from "./components/home/Admin";
import ContactoApp from "./components/home/Contacto";
import AreLegalApp from "./components/home/AreaLegal";

import NavBar from "./components/home/layouts/NavBar";
import FooterApp from "./components/home/layouts/FooterApp";

function App() {

  return (
    <BrowserRouter>
    <NavBar/>
      <Routes>
        {/* <Switch> */}
        <Route path="/login" element={<LoginUser />} />
        <Route path="/register" element={<RegisterUser />} />
        <Route path="/publicar" element={<PublicarApp />} />
        <Route path="/precios" element={<PriceApp />} />
        <Route path="/admin" element={<AdminApp />} />
        <Route path="/contacto" element={<ContactoApp />}/>
        <Route path="/area-legal" element={<AreLegalApp />}/>
        <Route path="/" element={<InitApp />}/>
        {/* </Switch> */}
      </Routes>
      <FooterApp />
    </BrowserRouter>
  );
};
export default App;