import Link from "next/link";

export default function Footer() {
  return (
    <footer>
      <div>
        <p>
          <span> &bull; </span> Ссылки
        </p>

        <Link href="/">
          <a>Главная</a>
        </Link>

        <Link href="/chat">
          <a>Чаты</a>
        </Link>

        <Link href="/blog">
          <a>Блог</a>
        </Link>

        <Link href="/methods">
          <a>Методичка</a>
        </Link>
      </div>

      <div>
        <p>
          <span> &bull; </span> Правила
        </p>

        <Link href="/">
          <a>Политика конфидициальности</a>
        </Link>

        <Link href="/">
          <a>Условия использования</a>
        </Link>

        <Link href="/">
          <a>Защита данных</a>
        </Link>

        <Link href="/">
          <a>DMCA</a>
        </Link>
      </div>

      <div>
        <p> 2022 &bull; ОЗЖТ </p>
        <p> Next.js, Vercel, Prisma и Azure </p>
        <p> Сделано с помощью: </p>
      </div>
    </footer>
  );
}
