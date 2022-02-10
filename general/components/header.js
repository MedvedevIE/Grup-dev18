import Image from "next/image";

export default function Header() {
  return (
    <header>
      <div>
        <div className="logo">
          <Image
            src="/icons/logo-512.png"
            alt="логотип"
            width="36"
            height="36"
          />

          <h3> School Journal </h3>
        </div>

        <div className="menu">
          <p> Главная </p>
          <p> Чаты </p>
          <p> Блог </p>
          <p> Методичка </p>
        </div>
      </div>

      <div className="user">
        <p> Войти </p>
        <p> Регистрация </p>

        <div className="avatar"></div>
      </div>
    </header>
  );
}
