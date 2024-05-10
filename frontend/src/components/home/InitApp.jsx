import axios from 'axios';
import { Link } from "react-router-dom";
import React, {useEffect, useState} from "react";

const endpoint = "http://localhost:8000/";
const InitApp = () => {

  const [users, setUsers] = useState( [] );
  
  useEffect(()=>{
    getUsers();
  },[])

  const getUsers = async() => {
    const data = await axios.get(`${endpoint}/`);
    setUsers(data.data);
  }
  //this.setUsers(users);
//console.log(test)

// const InitApp = () => {
  return (
    <div>
      <div className="hero-slider-wrapper bg-dark">
        <div className="hero-slider owl-carousel dots-over" data-nav="true" data-dots="true" data-autoplay="true">
          <div className="owl-slide d-flex align-items-center bg-overlay bg-overlay-400" style={{backgroundImage: 'url(../public/img/photos/bg7.jpg)'}}>
            <div className="container">
              <div className="row">
                <div className="col-md-10 offset-md-1 col-lg-7 offset-lg-0 col-xl-6 col-xxl-5 text-center text-lg-start">
                  <h2 className="display-1 fs-56 mb-4 text-white animated-caption" data-anim="animate__slideInDown" data-anim-delay={500}>We bring solutions to make life easier.</h2>
                  <p className="lead fs-23 lh-sm mb-7 text-white animated-caption" data-anim="animate__slideInRight" data-anim-delay={1000}>We are a creative company that focuses on long term relationships with customers.</p>
                  <div className="animated-caption" data-anim="animate__slideInUp" data-anim-delay={1500}><Link to="#" className="btn btn-lg btn-outline-white rounded-pill">Read More</Link></div>
                </div>
              </div>
            </div>
          </div>
          <div className="owl-slide d-flex align-items-center bg-overlay bg-overlay-400" style={{backgroundImage: 'url(../public/img/photos/bg8.jpg)'}}>
            <div className="container light-gallery-wrapper">
              <div className="row">
                <div className="col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center">
                  <h2 className="display-1 fs-56 mb-4 text-white animated-caption" data-anim="animate__slideInDown" data-anim-delay={500}>We are trusted by over a million customers.</h2>
                  <p className="lead fs-23 lh-sm mb-7 text-white animated-caption" data-anim="animate__slideInRight" data-anim-delay={1000}>Here a few reasons why our customers choose us.</p>
                  <div className="animated-caption" data-anim="animate__slideInUp" data-anim-delay={1500}><Link to="https://www.youtube.com/watch?v=zo9dJFo8H8g" className="btn btn-circle btn-white btn-play ripple mx-auto mb-5 lightbox"><i className="fa-solid fa-play" /></Link></div>
                </div>
              </div>
            </div>
          </div>
          <div className="owl-slide d-flex align-items-center bg-overlay bg-overlay-400" style={{backgroundImage: 'url(../public/img/photos/bg9.jpg)'}}>
            <div className="container">
              <div className="row">
                <div className="col-md-10 offset-md-1 col-lg-7 offset-lg-5 col-xl-6 offset-xl-6 col-xxl-5 offset-xxl-6 text-center text-lg-start">
                  <h2 className="display-1 fs-56 mb-4 text-white animated-caption" data-anim="animate__slideInDown" data-anim-delay={500}>Just sit and relax.</h2>
                  <p className="lead fs-23 lh-sm mb-7 text-white animated-caption" data-anim="animate__slideInRight" data-anim-delay={1000}>We make sure your spending is stress free so that you can have the perfect control.</p>
                  <div className="animated-caption" data-anim="animate__slideInUp" data-anim-delay={1500}><Link to="#" className="btn btn-lg btn-outline-white rounded-pill">Contact Us</Link></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    <div className="container con_test pt-10 pt-md-14">
      <div className="row grid-view col-lg-12 gx-md-8 gx-xl-10 gy-8 gy-lg-0 mb-16 mb-md-19">
        
        { users.map((user,i) => ( 
           <div className="col-md-6 col-lg-3">
           <div className="position-relative mb-15">
             <div className="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed={0} style={{bottom: '-0.75rem', right: '-0.75rem', width: '98%', height: '98%', zIndex: 0, transform: 'translate3d(0px, 0px, 0px)'}} />
             <div className="card shadow-lg">
               <figure className="card-img-top"><img className="img-fluid" src="https://www.reinodelporno.com/wp-content/uploads/ngg_featured/Marta-LaCroft-esta-de-vuelta-en-CumLouder-1.jpg" srcSet="img/avatars/t1@2x.jpg 2x" alt="" /></figure>
               <div className="card-body px-6-atf-text py-5-atf-text">
                 <h4 className="mb-1">{user.name}</h4>
                 <p className="mb-0">{user.email}</p>
               </div>
             </div>
           </div>
         </div>
        )) } 
     
        <div className="col-md-6 col-lg-3">
          <div className="position-relative mb-15">
            <div className="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed={0} style={{bottom: '-0.75rem', right: '-0.75rem', width: '98%', height: '98%', zIndex: 0, transform: 'translate3d(0px, 0px, 0px)'}} />
            <div className="card shadow-lg">
              <figure className="card-img-top"><img className="img-fluid" src="https://www.reinodelporno.com/wp-content/uploads/ngg_featured/Marta-LaCroft-esta-de-vuelta-en-CumLouder-1.jpg" srcSet="img/avatars/t1@2x.jpg 2x" alt="" /></figure>
              <div className="card-body px-6-atf-text py-5-atf-text">
                <h4 className="mb-1">Coriss Ambady</h4>
                <p className="mb-0">Financial Analyst</p>
              </div>
            </div>
          </div>
        </div>
        <div className="col-md-6 col-lg-3">
          <div className="position-relative mb-15">
            <div className="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed={0} style={{bottom: '-0.75rem', right: '-0.75rem', width: '98%', height: '98%', zIndex: 0, transform: 'translate3d(0px, 0px, 0px)'}} />
            <div className="card shadow-lg">
              <figure className="card-img-top"><img className="img-fluid" src="https://www.reinodelporno.com/wp-content/uploads/ngg_featured/Marta-LaCroft-esta-de-vuelta-en-CumLouder-1.jpg" srcSet="img/avatars/t1@2x.jpg 2x" alt="" /></figure>
              <div className="card-body px-6-atf-text py-5-atf-text">
                <h4 className="mb-1">Coriss Ambady</h4>
                <p className="mb-0">Financial Analyst</p>
              </div>
            </div>
          </div>
        </div>
        <div className="col-md-6 col-lg-3">
          <div className="position-relative mb-15">
            <div className="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed={0} style={{bottom: '-0.75rem', right: '-0.75rem', width: '98%', height: '98%', zIndex: 0, transform: 'translate3d(0px, 0px, 0px)'}} />
            <div className="card shadow-lg">
              <figure className="card-img-top"><img className="img-fluid" src="https://www.reinodelporno.com/wp-content/uploads/ngg_featured/Marta-LaCroft-esta-de-vuelta-en-CumLouder-1.jpg" srcSet="img/avatars/t1@2x.jpg 2x" alt="" /></figure>
              <div className="card-body px-6-atf-text py-5-atf-text">
                <h4 className="mb-1">Coriss Ambady</h4>
                <p className="mb-0">Financial Analyst</p>
              </div>
            </div>
          </div>
        </div>
        <div className="col-md-6 col-lg-3">
          <div className="position-relative mb-15">
            <div className="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed={0} style={{bottom: '-0.75rem', right: '-0.75rem', width: '98%', height: '98%', zIndex: 0, transform: 'translate3d(0px, 0px, 0px)'}} />
            <div className="card shadow-lg">
              <figure className="card-img-top"><img className="img-fluid" src="https://www.reinodelporno.com/wp-content/uploads/ngg_featured/Marta-LaCroft-esta-de-vuelta-en-CumLouder-1.jpg" srcSet="img/avatars/t1@2x.jpg 2x" alt="" /></figure>
              <div className="card-body px-6-atf-text py-5-atf-text">
                <h4 className="mb-1">Coriss Ambady</h4>
                <p className="mb-0">Financial Analyst</p>
              </div>
            </div>
          </div>
        </div>
        <div className="col-md-6 col-lg-3">
          <div className="position-relative mb-15">
            <div className="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed={0} style={{bottom: '-0.75rem', right: '-0.75rem', width: '98%', height: '98%', zIndex: 0, transform: 'translate3d(0px, 0px, 0px)'}} />
            <div className="card shadow-lg">
              <figure className="card-img-top"><img className="img-fluid" src="https://www.reinodelporno.com/wp-content/uploads/ngg_featured/Marta-LaCroft-esta-de-vuelta-en-CumLouder-1.jpg" srcSet="img/avatars/t1@2x.jpg 2x" alt="" /></figure>
              <div className="card-body px-6-atf-text py-5-atf-text">
                <h4 className="mb-1">Coriss Ambady</h4>
                <p className="mb-0">Financial Analyst</p>
              </div>
            </div>
          </div>
        </div>
        <div className="col-md-6 col-lg-3">
          <div className="position-relative mb-15">
            <div className="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed={0} style={{bottom: '-0.75rem', right: '-0.75rem', width: '98%', height: '98%', zIndex: 0, transform: 'translate3d(0px, 0px, 0px)'}} />
            <div className="card shadow-lg">
              <figure className="card-img-top"><img className="img-fluid" src="https://www.reinodelporno.com/wp-content/uploads/ngg_featured/Marta-LaCroft-esta-de-vuelta-en-CumLouder-1.jpg" srcSet="img/avatars/t1@2x.jpg 2x" alt="" /></figure>
              <div className="card-body px-6-atf-text py-5-atf-text">
                <h4 className="mb-1">Coriss Ambady</h4>
                <p className="mb-0">Financial Analyst</p>
              </div>
            </div>
          </div>
        </div>
        <div className="col-md-6 col-lg-3">
          <div className="position-relative mb-15">
            <div className="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed={0} style={{bottom: '-0.75rem', right: '-0.75rem', width: '98%', height: '98%', zIndex: 0, transform: 'translate3d(0px, 0px, 0px)'}} />
            <div className="card shadow-lg">
              <figure className="card-img-top"><img className="img-fluid" src="https://www.reinodelporno.com/wp-content/uploads/ngg_featured/Marta-LaCroft-esta-de-vuelta-en-CumLouder-1.jpg" srcSet="img/avatars/t1@2x.jpg 2x" alt="" /></figure>
              <div className="card-body px-6-atf-text py-5-atf-text">
                <h4 className="mb-1">Coriss Ambady</h4>
                <p className="mb-0">Financial Analyst</p>
              </div>
            </div>
          </div>
        </div>
        <div className="col-md-6 col-lg-3">
          <div className="position-relative mb-15">
            <div className="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed={0} style={{bottom: '-0.75rem', right: '-0.75rem', width: '98%', height: '98%', zIndex: 0, transform: 'translate3d(0px, 0px, 0px)'}} />
            <div className="card shadow-lg">
              <figure className="card-img-top"><img className="img-fluid" src="https://www.reinodelporno.com/wp-content/uploads/ngg_featured/Marta-LaCroft-esta-de-vuelta-en-CumLouder-1.jpg" srcSet="img/avatars/t1@2x.jpg 2x" alt="" /></figure>
              <div className="card-body px-6-atf-text py-5-atf-text">
                <h4 className="mb-1">Coriss Ambady</h4>
                <p className="mb-0">Financial Analyst</p>
              </div>
            </div>
          </div>
        </div>
        <div className="col-md-6 col-lg-3">
          <div className="position-relative mb-15">
            <div className="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed={0} style={{bottom: '-0.75rem', right: '-0.75rem', width: '98%', height: '98%', zIndex: 0, transform: 'translate3d(0px, 0px, 0px)'}} />
            <div className="card shadow-lg">
              <figure className="card-img-top"><img className="img-fluid" src="https://www.reinodelporno.com/wp-content/uploads/ngg_featured/Marta-LaCroft-esta-de-vuelta-en-CumLouder-1.jpg" srcSet="img/avatars/t1@2x.jpg 2x" alt="" /></figure>
              <div className="card-body px-6-atf-text py-5-atf-text">
                <h4 className="mb-1">Coriss Ambady</h4>
                <p className="mb-0">Financial Analyst</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div className="container con_test pt-10 pt-md-14">
      <div className="row grid-view col-lg-12 gx-md-8 gx-xl-10 gy-8 gy-lg-0 mb-16 mb-md-19">
        
        <div className="col-md-6 col-lg-2">
          <div className="position-relative mb-15">
            <div className="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed={0} style={{bottom: '-0.75rem', right: '-0.75rem', width: '98%', height: '98%', zIndex: 0, transform: 'translate3d(0px, 0px, 0px)'}} />
            <div className="card shadow-lg">
              <figure className="card-img-top"><img className="img-fluid" src="https://www.reinodelporno.com/wp-content/uploads/ngg_featured/Marta-LaCroft-esta-de-vuelta-en-CumLouder-1.jpg" srcSet="img/avatars/t1@2x.jpg 2x" alt="" /></figure>
              <div className="card-body px-6-atf-text py-5-atf-text">
                <h4 className="mb-1">Coriss Ambady</h4>
                <p className="mb-0">Financial Analyst</p>
              </div>
            </div>
          </div>
        </div>
        <div className="col-md-6 col-lg-2">
          <div className="position-relative mb-15">
            <div className="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed={0} style={{bottom: '-0.75rem', right: '-0.75rem', width: '98%', height: '98%', zIndex: 0, transform: 'translate3d(0px, 0px, 0px)'}} />
            <div className="card shadow-lg">
              <figure className="card-img-top"><img className="img-fluid" src="https://www.reinodelporno.com/wp-content/uploads/ngg_featured/Marta-LaCroft-esta-de-vuelta-en-CumLouder-1.jpg" srcSet="img/avatars/t1@2x.jpg 2x" alt="" /></figure>
              <div className="card-body px-6-atf-text py-5-atf-text">
                <h4 className="mb-1">Coriss Ambady</h4>
                <p className="mb-0">Financial Analyst</p>
              </div>
            </div>
          </div>
        </div>
        <div className="col-md-6 col-lg-2">
          <div className="position-relative mb-15">
            <div className="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed={0} style={{bottom: '-0.75rem', right: '-0.75rem', width: '98%', height: '98%', zIndex: 0, transform: 'translate3d(0px, 0px, 0px)'}} />
            <div className="card shadow-lg">
              <figure className="card-img-top"><img className="img-fluid" src="https://www.reinodelporno.com/wp-content/uploads/ngg_featured/Marta-LaCroft-esta-de-vuelta-en-CumLouder-1.jpg" srcSet="img/avatars/t1@2x.jpg 2x" alt="" /></figure>
              <div className="card-body px-6-atf-text py-5-atf-text">
                <h4 className="mb-1">Coriss Ambady</h4>
                <p className="mb-0">Financial Analyst</p>
              </div>
            </div>
          </div>
        </div>
        <div className="col-md-6 col-lg-2">
          <div className="position-relative mb-15">
            <div className="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed={0} style={{bottom: '-0.75rem', right: '-0.75rem', width: '98%', height: '98%', zIndex: 0, transform: 'translate3d(0px, 0px, 0px)'}} />
            <div className="card shadow-lg">
              <figure className="card-img-top"><img className="img-fluid" src="https://www.reinodelporno.com/wp-content/uploads/ngg_featured/Marta-LaCroft-esta-de-vuelta-en-CumLouder-1.jpg" srcSet="img/avatars/t1@2x.jpg 2x" alt="" /></figure>
              <div className="card-body px-6-atf-text py-5-atf-text">
                <h4 className="mb-1">Coriss Ambady</h4>
                <p className="mb-0">Financial Analyst</p>
              </div>
            </div>
          </div>
        </div>
        <div className="col-md-6 col-lg-2">
          <div className="position-relative mb-15">
            <div className="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed={0} style={{bottom: '-0.75rem', right: '-0.75rem', width: '98%', height: '98%', zIndex: 0, transform: 'translate3d(0px, 0px, 0px)'}} />
            <div className="card shadow-lg">
              <figure className="card-img-top"><img className="img-fluid" src="https://www.reinodelporno.com/wp-content/uploads/ngg_featured/Marta-LaCroft-esta-de-vuelta-en-CumLouder-1.jpg" srcSet="img/avatars/t1@2x.jpg 2x" alt="" /></figure>
              <div className="card-body px-6-atf-text py-5-atf-text">
                <h4 className="mb-1">Coriss Ambady</h4>
                <p className="mb-0">Financial Analyst</p>
              </div>
            </div>
          </div>
        </div>
        <div className="col-md-6 col-lg-2">
          <div className="position-relative mb-15">
            <div className="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed={0} style={{bottom: '-0.75rem', right: '-0.75rem', width: '98%', height: '98%', zIndex: 0, transform: 'translate3d(0px, 0px, 0px)'}} />
            <div className="card shadow-lg">
              <figure className="card-img-top"><img className="img-fluid" src="https://www.reinodelporno.com/wp-content/uploads/ngg_featured/Marta-LaCroft-esta-de-vuelta-en-CumLouder-1.jpg" srcSet="img/avatars/t1@2x.jpg 2x" alt="" /></figure>
              <div className="card-body px-6-atf-text py-5-atf-text">
                <h4 className="mb-1">Coriss Ambady</h4>
                <p className="mb-0">Financial Analyst</p>
              </div>
            </div>
          </div>
        </div>
        <div className="col-md-6 col-lg-2">
          <div className="position-relative mb-15">
            <div className="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed={0} style={{bottom: '-0.75rem', right: '-0.75rem', width: '98%', height: '98%', zIndex: 0, transform: 'translate3d(0px, 0px, 0px)'}} />
            <div className="card shadow-lg">
              <figure className="card-img-top"><img className="img-fluid" src="https://www.reinodelporno.com/wp-content/uploads/ngg_featured/Marta-LaCroft-esta-de-vuelta-en-CumLouder-1.jpg" srcSet="img/avatars/t1@2x.jpg 2x" alt="" /></figure>
              <div className="card-body px-6-atf-text py-5-atf-text">
                <h4 className="mb-1">Coriss Ambady</h4>
                <p className="mb-0">Financial Analyst</p>
              </div>
            </div>
          </div>
        </div>
        <div className="col-md-6 col-lg-2">
          <div className="position-relative mb-15">
            <div className="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed={0} style={{bottom: '-0.75rem', right: '-0.75rem', width: '98%', height: '98%', zIndex: 0, transform: 'translate3d(0px, 0px, 0px)'}} />
            <div className="card shadow-lg">
              <figure className="card-img-top"><img className="img-fluid" src="https://www.reinodelporno.com/wp-content/uploads/ngg_featured/Marta-LaCroft-esta-de-vuelta-en-CumLouder-1.jpg" srcSet="img/avatars/t1@2x.jpg 2x" alt="" /></figure>
              <div className="card-body px-6-atf-text py-5-atf-text">
                <h4 className="mb-1">Coriss Ambady</h4>
                <p className="mb-0">Financial Analyst</p>
              </div>
            </div>
          </div>
        </div>
        <div className="col-md-6 col-lg-2">
          <div className="position-relative mb-15">
            <div className="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed={0} style={{bottom: '-0.75rem', right: '-0.75rem', width: '98%', height: '98%', zIndex: 0, transform: 'translate3d(0px, 0px, 0px)'}} />
            <div className="card shadow-lg">
              <figure className="card-img-top"><img className="img-fluid" src="https://www.reinodelporno.com/wp-content/uploads/ngg_featured/Marta-LaCroft-esta-de-vuelta-en-CumLouder-1.jpg" srcSet="img/avatars/t1@2x.jpg 2x" alt="" /></figure>
              <div className="card-body px-6-atf-text py-5-atf-text">
                <h4 className="mb-1">Coriss Ambady</h4>
                <p className="mb-0">Financial Analyst</p>
              </div>
            </div>
          </div>
        </div>
        <div className="col-md-6 col-lg-2">
          <div className="position-relative mb-15">
            <div className="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed={0} style={{bottom: '-0.75rem', right: '-0.75rem', width: '98%', height: '98%', zIndex: 0, transform: 'translate3d(0px, 0px, 0px)'}} />
            <div className="card shadow-lg">
              <figure className="card-img-top"><img className="img-fluid" src="https://www.reinodelporno.com/wp-content/uploads/ngg_featured/Marta-LaCroft-esta-de-vuelta-en-CumLouder-1.jpg" srcSet="img/avatars/t1@2x.jpg 2x" alt="" /></figure>
              <div className="card-body px-6-atf-text py-5-atf-text">
                <h4 className="mb-1">Coriss Ambady</h4>
                <p className="mb-0">Financial Analyst</p>
              </div>
            </div>
          </div>
        </div>
        <div className="col-md-6 col-lg-2">
          <div className="position-relative mb-15">
            <div className="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed={0} style={{bottom: '-0.75rem', right: '-0.75rem', width: '98%', height: '98%', zIndex: 0, transform: 'translate3d(0px, 0px, 0px)'}} />
            <div className="card shadow-lg">
              <figure className="card-img-top"><img className="img-fluid" src="https://www.reinodelporno.com/wp-content/uploads/ngg_featured/Marta-LaCroft-esta-de-vuelta-en-CumLouder-1.jpg" srcSet="img/avatars/t1@2x.jpg 2x" alt="" /></figure>
              <div className="card-body px-6-atf-text py-5-atf-text">
                <h4 className="mb-1">Coriss Ambady</h4>
                <p className="mb-0">Financial Analyst</p>
              </div>
            </div>
          </div>
        </div>
        <div className="col-md-6 col-lg-2">
          <div className="position-relative mb-15">
            <div className="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed={0} style={{bottom: '-0.75rem', right: '-0.75rem', width: '98%', height: '98%', zIndex: 0, transform: 'translate3d(0px, 0px, 0px)'}} />
            <div className="card shadow-lg">
              <figure className="card-img-top"><img className="img-fluid" src="https://www.reinodelporno.com/wp-content/uploads/ngg_featured/Marta-LaCroft-esta-de-vuelta-en-CumLouder-1.jpg" srcSet="img/avatars/t1@2x.jpg 2x" alt="" /></figure>
              <div className="card-body px-6-atf-text py-5-atf-text">
                <h4 className="mb-1">Coriss Ambady</h4>
                <p className="mb-0">Financial Analyst</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
  );
};
export default InitApp;