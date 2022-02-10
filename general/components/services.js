import Link from "next/link";

import {
  FaArrowRight,
  FaAtlas,
  FaBook,
  FaCalendarCheck,
  FaCog,
  FaComment,
  FaFeather,
} from "react-icons/fa";

import * as styles from "../styles/servicesCards.module.css";

function GridBlock({ icon, title, children, url }) {
  return (
    <div>
      <div>
        {icon}
        <h3>{title}</h3>
      </div>

      {children}

      <Link href={url}>
        <a>
          Перейти <FaArrowRight />
        </a>
      </Link>
    </div>
  );
}

export default function ServicesGrid() {
  return (
    <div className={styles["services-grid"]}>
      <GridBlock title="Методические работы" url="/metodics" icon={<FaAtlas />}>
        <p> Просмотр онлайн библеотеки методических работ </p>
      </GridBlock>

      <GridBlock title="Школьный дневник" url="/metodics" icon={<FaBook />}>
        <p> Успеваемость ученика и оценки за сделанные работы </p>
      </GridBlock>

      <GridBlock
        title="Отчет об обучении"
        url="/metodics"
        icon={<FaCalendarCheck />}
      >
        <p> Электронный отчет об учащихся с любого устройства </p>
      </GridBlock>

      <GridBlock title="Связь с учениками" url="/metodics" icon={<FaComment />}>
        <p> Доступ к аккаунту родителя для связи с обучаещимся </p>
      </GridBlock>

      <GridBlock title="Блоги учителей" url="/metodics" icon={<FaFeather />}>
        <p> Личные блоги учителей внутри вебсайта </p>
      </GridBlock>

      <GridBlock title="Настройки аккаунта" url="/metodics" icon={<FaCog />}>
        <p> Быстрый способ получения настроек вашего аккаунта </p>
      </GridBlock>
    </div>
  );
}
