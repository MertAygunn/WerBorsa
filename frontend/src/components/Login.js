import React, { useState, useEffect } from "react";
import axios from "axios";
import "./Login.css";

const Login = ({ isOpen, onRequestClose, isRegister, setIsLoggedIn }) => {
  console.log("çağırıldım ;)");
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const [name, setName] = useState("");
  const [passwordConfirmation, setPasswordConfirmation] = useState("");
  const [error, setError] = useState(null);
  const [successMessage, setSuccessMessage] = useState(null);

  if (!isOpen) {
    return null;
  }

  const handleLogin = async (e) => {
    e.preventDefault();
    setError(null);
    setSuccessMessage(null);

    try {
      const response = await axios.post("http://127.0.0.1:8000/api/login", {
        email,
        password,
      });
      setSuccessMessage("Giriş başarılı!");
      setIsLoggedIn(true);
      onRequestClose();
    } catch (error) {
      setError(error.response?.data.message || "Giriş hatalı.");
    }
  };

  const handleRegister = async (e) => {
    e.preventDefault();
    setError(null);
    setSuccessMessage(null);

    try {
      const response = await axios.post("http://127.0.0.1:8000/api/register", {
        name,
        email,
        password,
        password_confirmation: passwordConfirmation,
      });
      setSuccessMessage("Kayıt başarılı!");
      onRequestClose();
    } catch (error) {
      setError(error.response?.data.message || "Kayıt hatası.");
    }
  };

  return (
    <div className="section">
      <div className="container">
        <div className="row full-height justify-content-center">
          <div className="col-12 text-center align-self-center py-5">
            <div className="section pb-5 pt-5 pt-sm-2 text-center">
              <h6 className="mb-0 pb-3">
                <span>Log In</span>
                <span>Sign Up</span>
              </h6>
              <input
                className="checkbox"
                type="checkbox"
                id="reg-log"
                name="reg-log"
                checked={isRegister}
                onChange={() => {}}
              />
              <label htmlFor="reg-log"></label>
              <div className="card-3d-wrap mx-auto">
                <div className="card-3d-wrapper">
                  <div className="card-front">
                    <div className="center-wrap">
                      <div className="section text-center">
                        <h4 className="mb-4 pb-3">Log In</h4>
                        {error && <div className="alert alert-danger">{error}</div>}
                        {successMessage && <div className="alert alert-success">{successMessage}</div>}
                        <form onSubmit={handleLogin} className="form-group">
                          <input
                            type="email"
                            className="form-style"
                            placeholder="Your Email"
                            value={email}
                            onChange={(e) => setEmail(e.target.value)}
                            required
                          />
                          <i className="input-icon uil uil-at"></i>
                          <input
                            type="password"
                            className="form-style mt-2"
                            placeholder="Your Password"
                            value={password}
                            onChange={(e) => setPassword(e.target.value)}
                            required
                          />
                          <i className="input-icon uil uil-lock-alt"></i>
                          <button type="submit" className="btn mt-4">
                            Submit
                          </button>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div className="card-back">
                    <div className="center-wrap">
                      <div className="section text-center">
                        <h4 className="mb-4 pb-3">Sign Up</h4>
                        <form onSubmit={handleRegister} className="form-group">
                          <input
                            type="text"
                            className="form-style"
                            placeholder="Your Full Name"
                            value={name}
                            onChange={(e) => setName(e.target.value)}
                            required
                          />
                          <i className="input-icon uil uil-user"></i>
                          <input
                            type="email"
                            className="form-style mt-2"
                            placeholder="Your Email"
                            value={email}
                            onChange={(e) => setEmail(e.target.value)}
                            required
                          />
                          <i className="input-icon uil uil-at"></i>
                          <input
                            type="password"
                            className="form-style mt-2"
                            placeholder="Your Password"
                            value={password}
                            onChange={(e) => setPassword(e.target.value)}
                            required
                          />
                          <i className="input-icon uil uil-lock-alt"></i>
                          <input
                            type="password"
                            className="form-style mt-2"
                            placeholder="Confirm Password"
                            value={passwordConfirmation}
                            onChange={(e) => setPasswordConfirmation(e.target.value)}
                            required
                          />
                          <i className="input-icon uil uil-lock-alt"></i>
                          <button type="submit" className="btn mt-4">
                            Submit
                          </button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <p className="mb-0 mt-4 text-center">
                <a href="#0" className="link">
                  Forgot your password?
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

export default Login;
