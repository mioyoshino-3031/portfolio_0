//ローディング
window.onload = function() {
    const loading = document.getElementById('loading');
    loading.classList.add('loaded')
}

//ダークモード
// チェックボックスの取得
const btn = document.querySelector("#switch-mode");

// チェックした時の挙動
btn.addEventListener("change", () => {
  if (btn.checked == true) {
    // ダークモード
    document.body.classList.remove("light-mode");
    document.body.classList.add("dark-mode");
    document.getElementById("switch-mode-button").classList.remove("light-mode-button")
    document.getElementById("switch-mode-button").classList.add("dark-mode-button")
  } else {
    // ライトモード
    document.body.classList.remove("dark-mode");
    document.body.classList.add("light-mode");
    document.getElementById("switch-mode-button").classList.remove("dark-mode-button")
    document.getElementById("switch-mode-button").classList.add("light-mode-button")
  }
});

//スムーススクロール
document.addEventListener("click", e => {
    const target = e.target;
  
    if (!target.classList.contains("smooth-scroll")) return;
    e.preventDefault();
  
    const targetId = target.hash;
    document.querySelector(targetId).scrollIntoView({
      behavior: "smooth",
      block: "start"
    });
  });