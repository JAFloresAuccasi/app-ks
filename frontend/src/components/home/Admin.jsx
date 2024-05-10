import React from "react";
import SectionApp from "./layouts/Section";

    const AdminApp = () => {
      return (
    <div>
    <SectionApp/>
    <section className="wrapper bg-soft-primary angled lower-start">
        <div className="container py-14 py-md-16">
          <div className="row">
            <div className="col-xl-10 mx-auto">
              <div className="row align-items-center counter-wrapper gy-6 text-center">
                <div className="col-md-3">
                  <img src="img/icons/check.svg" className="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                  <h3 className="counter" style={{visibility: 'visible'}}>7518</h3>
                  <p>Completed Projects</p>
                </div>
                <div className="col-md-3">
                  <img src="img/icons/user.svg" className="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                  <h3 className="counter" style={{visibility: 'visible'}}>3472</h3>
                  <p>Satisfied Customers</p>
                </div>
                <div className="col-md-3">
                  <img src="img/icons/briefcase-2.svg" className="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                  <h3 className="counter" style={{visibility: 'visible'}}>2184</h3>
                  <p>Expert Employees</p>
                </div>
                <div className="col-md-3">
                  <img src="img/icons/award-2.svg" className="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                  <h3 className="counter" style={{visibility: 'visible'}}>4523</h3>
                  <p>Awards Won</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  );
};
export default AdminApp;