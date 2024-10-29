import React, { useState, Suspense, lazy } from "react";
import "bootstrap/dist/css/bootstrap.min.css";
import "./Home.css";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";

// Login bileşenini burada dinamik olarak yüklüyoruz
const Login = lazy(() => import("./Login"));

const Home = () => {
  const [isModalOpen, setIsModalOpen] = useState(false);
  const [isRegister, setIsRegister] = useState(false);
  const [isLoggedIn, setIsLoggedIn] = useState(false);

  const handleOpenModal = () => {
    setIsModalOpen(true);
  };

  const handleCloseModal = () => {
    setIsModalOpen(false);
  };

  const toggleMode = (mode) => {
    setIsRegister(mode === "register");
  };

  return (
    <div className="container-fluid">
      <div className="row">
        <div className="col-md-2">
          <div className="advertisement">
            <h4>Reklam Alanı 1</h4>
          </div>
        </div>

        <div className="col-md-8">
          <div className="row no-gutters">
            {/* Para birimi kutuları */}
            <div className="col-md-2">
              <div className="currency-box">Para Birimi 1</div>
            </div>
            <div className="col-md-2">
              <div className="currency-box">Para Birimi 2</div>
            </div>
            <div className="col-md-2">
              <div className="currency-box">Para Birimi 3</div>
            </div>
            <div className="col-md-2">
              <div className="currency-box">Para Birimi 4</div>
            </div>
            <div className="col-md-2">
              <div className="currency-box">Para Birimi 5</div>
            </div>
            <div className="col-md-2">
              <button className="register-box" onClick={handleOpenModal}>
                {isLoggedIn ? "Profilim" : "Giriş Yap/Kayıt Ol"}
              </button>
            </div>
          </div>

          <div className="chart-section">
            <h4>Para Birimi Grafiği</h4>
          </div>
        </div>

        <div className="col-md-2">
          <div className="advertisement">
            <h4>Reklam Alanı 2</h4>
          </div>
        </div>
      </div>

      {isModalOpen && (
        <div className="modal-overlay">
          <div className="modal-content">
            <button className="close-button" onClick={handleCloseModal}>
              &times;
            </button>
            <div className="auth-toggle d-flex justify-content-around">
              <button
                className={`auth-button ${!isRegister ? "active" : ""}`}
                onClick={() => toggleMode("login")}
              >
                Giriş Yap
              </button>
              <button
                className={`auth-button ${isRegister ? "active" : ""}`}
                onClick={() => toggleMode("register")}
              >
                Kayıt Ol
              </button>
            </div>
            {/* Dinamik olarak yükleniyor */}
            <Suspense fallback={<div>Yükleniyor...</div>}>
              <Login
                isOpen={isModalOpen}
                onRequestClose={handleCloseModal}
                isRegister={isRegister}
                setIsLoggedIn={setIsLoggedIn}
              />
            </Suspense>
          </div>
        </div>
      )}
    </div>
  );
};

export default Home;
