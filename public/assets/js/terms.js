document.addEventListener("DOMContentLoaded", function() {
    const links = document.querySelectorAll('.list-group a');
    const sections = [
        { id: "important-message", linkId: "important-message-link", start: 0, end: 181 },
        { id: "Ownership-Affiliates", linkId: "ownership-affiliates-link", start: 182, end: 408 },
        { id: "Primary-Offerings", linkId: "primary-offerings-link", start: 409, end: 740 },
        { id: "Securities-Disclaimer", linkId: "securities-disclaimer-link", start: 741, end: 957 },
        { id: "Investment-Warning", linkId: "investment-warning-link", start: 958, end: 1206 },
        { id: "Usage-Agreement", linkId: "usage-agreement-link", start: 1207, end: 1292 },
        { id: "Investor-Notices", linkId: "investor-notices-link", start: 1293, end: 1561 },
        { id: "Marketplace-Disclosure", linkId: "marketplace-disclosure-link", start: 1562, end: 1836 },
        { id: "Market-Disclaimers", linkId: "market-disclaimers-link", start: 1837, end: Infinity }
    ];

    links.forEach(link => {
        link.addEventListener('click', function() {
            links.forEach(l => l.classList.remove('active'));
            this.classList.add('active');
        });
    });

    window.addEventListener("scroll", function() {
        var scrollY = window.scrollY || window.pageYOffset;

        sections.forEach(section => {
            if (scrollY >= section.start && scrollY <= section.end) {
                document.getElementById(section.linkId).classList.add('active');
            } else {
                document.getElementById(section.linkId).classList.remove('active');
            }
        });
    });

    sections.forEach(section => {
        document.getElementById(section.linkId).addEventListener("click", function(event) {
            event.preventDefault();
            document.getElementById(section.id).scrollIntoView({ behavior: "smooth" });
        });
    });
});
