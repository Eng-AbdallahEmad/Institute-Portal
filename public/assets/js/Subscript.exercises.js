// تعريف الألوان كمتغيرات (نفس التدرجات الأصلية مع إضافة مشابهة)
let colors = [
    "#00FF9C", "#bc1b3d", "#e92f57", "#C5BAFF", "#FF9D3D", 
    "#F6FB7A", "#72BF78", "#B7E0FF", "#87A2FF", "#FF8A8A", 
    "#E178C5", "#FFB3B3", "#FFD6A5", "#C4FFF9", "#A3E4D7", 
    "#FFABAB", "#FFC3A0", "#D4A5FF", "#B5EAEA", "#FFB6C1"
];

// دالة لاختيار لون عشوائي من الألوان المتبقية وإزالته
function getRandomColorFromPalette() {
    if (colors.length === 0) {
        console.warn("نفدت الألوان!"); // تحذير إذا لم تعد هناك ألوان متاحة
        return "#000"; // قيمة افتراضية (أسود) إذا لم يتبق ألوان
    }
    const randomIndex = Math.floor(Math.random() * colors.length);
    const selectedColor = colors[randomIndex];
    colors.splice(randomIndex, 1); // إزالة اللون المختار من المصفوفة
    return selectedColor;
}

// دالة لتعيين خلفية متدرجة عشوائية لجميع العناصر
function setRandomBackgrounds() {
    const containers = document.querySelectorAll(".container-project"); // استهداف جميع العناصر
    containers.forEach((container) => {
        const color1 = getRandomColorFromPalette();
        const color2 = getRandomColorFromPalette();
        container.style.background = `linear-gradient(to bottom right, ${color1}, ${color2})`;
        container.style.borderRadius = '15px'; // للحفاظ على الزوايا المنحنية
    });
}

// استدعاء الدالة عند تحميل الصفحة
setRandomBackgrounds();
