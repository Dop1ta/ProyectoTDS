import { Route, Routes } from "react-router-dom";
import Inicio from "./src/Pages/inicio";

const RouterApp = () => {
  return <LogedInRoutes />;
};

const LogedInRoutes = () => {
  return (
    <>
      <Routes>
        <Route exact path="/" element={<Inicio />} />
      </Routes>
    </>
  );
};
export default RouterApp;