import React, { useState, Suspense, lazy } from "react";
import Home from "./components/Home";

// Login bileşenini burada dinamik olarak yüklüyoruz
const Login = lazy(() => import("./components/Login"));

function App() {
  const [isLoginOpen, setIsLoginOpen] = useState(false); // Modal durumu için state

  const openLoginModal = () => {
    setIsLoginOpen(true);
  };

  const closeLoginModal = () => {
    setIsLoginOpen(false);
  };

  return (
    <div>
      {/* Home sayfası */}
      <Home onOpenLogin={openLoginModal} />

      {/* Login bileşeni modal olarak yalnızca isLoginOpen true olduğunda yükleniyor */}
      {isLoginOpen && (
        <Suspense fallback={<div>Yükleniyor...</div>}>
          <Login isOpen={isLoginOpen} onRequestClose={closeLoginModal} />
        </Suspense>
      )}
    </div>
  );
}

export default App;
