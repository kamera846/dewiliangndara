const header = document.getElementsByTagName("header")[0];
if (document.location.pathname === "/") {
    header.classList.add("bg-light");
} else {
    header.classList.add("bg-soft-primary");
}
