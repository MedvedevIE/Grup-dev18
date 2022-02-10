import Image from "next/image";

import * as styles from "../styles/hero.module.css";

export default function HeroSection({ title, subtitle, children }) {
  return (
    <div id="hero" className={styles.block}>
      <div>
        <div className={styles["hero-block"]}>
          <div>
            <Image src="/icons/logo-512.png" alt="" width="150" height="150" />
          </div>

          <div>
            <p>{title}</p>
            <h1>{subtitle}</h1>
          </div>
        </div>

        {children}
      </div>
    </div>
  );
}
