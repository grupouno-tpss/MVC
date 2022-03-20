//GSAP
function animations() {
    this.item();
}

animations.prototype.item = () => {
    gsap.to(".item", {
        duration: 2,
        rotationY: 360
    });
}

animations.prototype.logo = () => {
    gsap.from(".logo", { duration: 2, x: 300, opacity: 0, scale: 0.5 });
}

let init = new animations();