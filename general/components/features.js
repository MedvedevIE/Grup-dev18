import { FaCertificate, FaCheck, FaStar } from "react-icons/fa";
import * as styles from "../styles/features.module.css";

export default function Features() {
  return (
    <div className={styles.features}>
      <div>
        <FaStar className={styles.yellow} />
        <h3> Все в одном </h3>
        <p>
          Все действия и возможности на одной платформе, не нужно использовать
          сторонние решения
        </p>
      </div>

      <div>
        <FaCheck className={styles.red} />
        <h3> Узнай результаты </h3>
        <p>
          Для учителей и учащихся есть отчет успеваемости для оценки своих сил и
          возможностей
        </p>
      </div>

      <div>
        <FaCertificate className={styles.blue} />
        <h3> Легко использовать </h3>
        <p>
          Интерфейс вебсайта прост для использования на любой платформе или на
          устройстве, так же имеется интуитивный дизайн
        </p>
      </div>
    </div>
  );
}
