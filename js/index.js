let shelf = document.querySelector(".polka2");
let teaSort = document.querySelectorAll(".teaSort");

teaSort.forEach(element => {
    element.addEventListener("click", function () {
        for (let i = 0, leftPos = 45; i < teaSort.length; i++, leftPos += 180) {
            teaSort[i].style.left = leftPos + "px";
        }
        let InputSort = element.querySelector(".InputSort")
        if (InputSort.checked) {
            element.style.left = "73%";
        }
    })
});

// let dodatky = document.querySelectorAll(".dodatky");
// let dodatkyPolka2 = [];

// dodatky.forEach(element2 => {
//     element2.addEventListener("click", function() {
//         let InputDodatky = element2.querySelector(".DodatkyInput");
//         if(InputDodatky.checked) {
//             dodatkyPolka2.push(element2);
//             dodatkyPolka2.indexOf(element2);
//             console.log(dodatkyPolka2.indexOf(element2));
//         }
//     })
// })

let lemon = document.querySelector(".lemon"),
    imbyr = document.querySelector(".imbyr"),
    milk = document.querySelector(".milk"),
    koritsa = document.querySelector(".koritsa");

lemon.addEventListener("click", function () {
    let lemonInput = lemon.querySelector("input");
    if (lemonInput.checked) {
        lemon.style.left = "59%";
    } else {
        lemon.style.left = "45px"
    }
})

imbyr.addEventListener("click", function () {
    let imbyrInput = imbyr.querySelector("input");
    if (imbyrInput.checked) {
        imbyr.style.left = "69%";
    } else {
        imbyr.style.left = "180px"
    }
})

milk.addEventListener("click", function () {
    let milkInput = milk.querySelector("input");
    if (milkInput.checked) {
        milk.style.left = "79%";
    } else {
        milk.style.left = "289px"
    }
})

koritsa.addEventListener("click", function () {
    let koritsaInput = koritsa.querySelector("input");
    if (koritsaInput.checked) {
        koritsa.style.left = "89%";
    } else {
        koritsa.style.left = "420px"
    }
})

let tort = document.querySelector(".tort"),
    sweet = document.querySelector(".sweet"),
    croisant = document.querySelector(".croisant");


tort.addEventListener("click", function () {
    let tortInput = tort.querySelector("input");
    if (tortInput.checked) {
        tort.style.left = "65%";
    } else {
        tort.style.left = "90px"
    }
})

sweet.addEventListener("click", function() {
    let sweetInput = sweet.querySelector("input");
    if(sweetInput.checked) {
        sweet.style.left = "75%";
    } else {
        sweet.style.left = "220px"
    }
})

croisant.addEventListener("click", function() {
    let croisantInput = croisant.querySelector("input");
    if(croisantInput.checked) {
        croisant.style.left = "85%";
    } else {
        croisant.style.left = "360px"
    }
})