const list = document.querySelector(".readmore-widgets");
const item = list.querySelectorAll(".readmore-item");

for (let i = 0; i < item.length; i++) {
    item[i].addEventListener("click", function () {
        const thisItem = this;

        const readWidget = thisItem.parentElement;

        const readText = readWidget.nextElementSibling;

        if (i === 0) {
            readText.innerHTML = "<h2>SPOŁECZNOŚĆ</h2><br><p>Nasz portal ma na celu ułatwić komunikację między ludźmi z krajów z całego świata.Zachęć znajomych i rodzinę do korzystania z naszego Mini Instagrama i ciesz się z jego możliwości już dziś.</p>";


            if (item[0].style.getPropertyValue("display") !== "none") {
                item[0].style.setProperty("box-shadow", "inset 0px 0px 21px 1px rgba(255, 210, 109, 0.57)");
                item[0].style.setProperty("-moz-box-shadow", "inset 0px 0px 21px 1px rgba(255, 210, 109, 0.57)");
                item[0].style.setProperty("-webkit-box-shadow", "inset 0px 0px 21px 1px rgba(255, 210, 109, 0.57)");


                const readIcon0 = item[0].children[0];
                readIcon0.style.color = "#ffb100";
                const readIcon1 = item[1].children[0];
                readIcon1.style.color = "#3a5f88";
                const readIcon2 = item[2].children[0];
                readIcon2.style.color = "#3a5f88";


                item[1].style.setProperty("box-shadow", "none");
                item[1].style.setProperty("-moz-box-shadow", "none");
                item[1].style.setProperty("-webkit-box-shadow", "none");
                item[2].style.setProperty("box-shadow", "none");
                item[2].style.setProperty("-moz-box-shadow", "none");
                item[2].style.setProperty("-webkit-box-shadow", "none");


                item[0].style.setProperty("transition", "0.2s all");
                readIcon0.style.setProperty("transition", "0.2s all");
                item[1].style.setProperty("transition", "0.2s all");
                readIcon1.style.setProperty("transition", "0.2s all");
                item[2].style.setProperty("transition", "0.2s all");
                readIcon2.style.setProperty("transition", "0.2s all");

            } else {
                item[0].style.setProperty("box-shadow", "none");
            }

        } else if (i === 1) {
            readText.innerHTML = "<h2>KOMUNIKACJA</h2><br><p>Aby ułatwić komunikację Mini Instagram posiada możliwość dodawania wpisów oraz chwalenia się swoimi niepowtarzalnymi fotografiami ze znajomymi. To znacznie ułatwia dzielenie się każdą chwilą ze znajomymi i rodziną.  </p>";

            if (item[1].style.getPropertyValue("display") !== "none") {
                item[1].style.setProperty("box-shadow", "inset 0px 0px 21px 1px rgba(255, 210, 109, 0.57)");
                item[1].style.setProperty("-moz-box-shadow", "inset 0px 0px 21px 1px rgba(255, 210, 109, 0.57)");
                item[1].style.setProperty("-webkit-box-shadow", "inset 0px 0px 21px 1px rgba(255, 210, 109, 0.57)");

                const readIcon0 = item[0].children[0];
                readIcon0.style.color = "#3a5f88";
                const readIcon1 = item[1].children[0];
                readIcon1.style.color = "#ffb100";
                const readIcon2 = item[2].children[0];
                readIcon2.style.color = "#3a5f88";

                item[0].style.setProperty("box-shadow", "none");
                item[0].style.setProperty("-moz-box-shadow", "none");
                item[0].style.setProperty("-webkit-box-shadow", "none");
                item[2].style.setProperty("box-shadow", "none");
                item[2].style.setProperty("-moz-box-shadow", "none");
                item[2].style.setProperty("-webkit-box-shadow", "none");

                item[0].style.setProperty("transition", "0.2s all");
                readIcon0.style.setProperty("transition", "0.2s all");
                item[1].style.setProperty("transition", "0.2s all");
                readIcon1.style.setProperty("transition", "0.2s all");
                item[2].style.setProperty("transition", "0.2s all");
                readIcon2.style.setProperty("transition", "0.2s all");

            } else {
                item[1].style.setProperty("box-shadow", "none");
            }

        } else if (i === 2) {
            readText.innerHTML = "<h2>TECHNOLOGIA</h2><br><p>Mini instagram stawia na prostote i wygode podczas korzystania z niego. Jego ogólna budowa jest bardzo prosta i nieskomplikowana. Dlatego jesteśmy zdania, że korzystanie z niego nie powinno sprawić użytkownikowi żadnej trudności. </p>";
            readText.append("Ponadto nasza platforma posiada funkcje rysowania, co również stanowi ciekawy dodatek do tego typu portalu.");

            if (item[2].style.getPropertyValue("display") !== "none") {
                item[2].style.setProperty("box-shadow", "inset 0px 0px 21px 1px rgba(255, 210, 109, 0.57)");
                item[2].style.setProperty("-moz-box-shadow", "inset 0px 0px 21px 1px rgba(255, 210, 109, 0.57)");
                item[2].style.setProperty("-webkit-box-shadow", "inset 0px 0px 21px 1px rgba(255, 210, 109, 0.57)");

                const readIcon0 = item[0].children[0];
                readIcon0.style.color = "#3a5f88";
                const readIcon1 = item[1].children[0];
                readIcon1.style.color = "#3a5f88";
                const readIcon2 = item[2].children[0];
                readIcon2.style.color = "#ffb100";

                item[0].style.setProperty("box-shadow", "none");
                item[0].style.setProperty("-moz-box-shadow", "none");
                item[0].style.setProperty("-webkit-box-shadow", "none");
                item[1].style.setProperty("box-shadow", "none");
                item[1].style.setProperty("-moz-box-shadow", "none");
                item[1].style.setProperty("-webkit-box-shadow", "none");

                item[0].style.setProperty("transition", "0.2s all");
                readIcon0.style.setProperty("transition", "0.2s all");
                item[1].style.setProperty("transition", "0.2s all");
                readIcon1.style.setProperty("transition", "0.2s all");
                item[2].style.setProperty("transition", "0.2s all");
                readIcon2.style.setProperty("transition", "0.2s all");

            } else {
                item[2].style.setProperty("box-shadow", "none");
            }
        }
    });
}