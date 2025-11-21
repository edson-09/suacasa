// --------- INICIO DO SCRIPT DO HEADER ----------

// Observar quando o conteúdo do fragment é carregado
const fragment = document.querySelector("include-fragment");
const divCaroussel = document.getElementById("featured-wrapper");

if (fragment) {
  fragment.addEventListener("load", function () {
    // Agora o conteúdo está disponível
    const divCaroussel = document.getElementById("featured-wrapper");
    if (divCaroussel) {
      const menuBtn = document.getElementById("menuBtn");
      const mobileMenu = document.getElementById("mobileMenu");
      const backdrop = document.getElementById("backdrop");

      // Painel principal do menu mobile
      const mainPanel = document.getElementById("mobileMain");
      // Todos os submenus (Para venda, Para arrendar, etc.)
      const subPanels = document.querySelectorAll('[data-panel="submenu"]');

      // Botões que fecham o menu (ícone X no topo)
      const closeMenuButtons = document.querySelectorAll("[data-close-menu]");
      // Botões "voltar" dos submenus (setinha para a esquerda)
      const backButtons = document.querySelectorAll("[data-back-main]");
      // Botões, no painel principal, que abrem cada submenu
      const openSubmenuButtons = document.querySelectorAll(
        "[data-open-submenu]"
      );

      // --------- FUNÇÕES AUXILIARES ----------

      // Abre o menu mobile (slide da esquerda + mostra backdrop)
      function openMenu() {
        mobileMenu.classList.remove("-translate-x-full");
        backdrop.classList.remove("pointer-events-none");
        backdrop.classList.add("opacity-100");
      }

      // Fecha o menu mobile e volta sempre para a página principal
      function closeMenu() {
        mobileMenu.classList.add("-translate-x-full");
        backdrop.classList.add("pointer-events-none");
        backdrop.classList.remove("opacity-100");
        showMainPanel();
      }

      // Mostra painel principal e esconde todos os submenus
      function showMainPanel() {
        mainPanel.classList.remove("hidden");
        subPanels.forEach((panel) => panel.classList.add("hidden"));
      }

      // Mostra um submenu específico e esconde o painel principal
      function showSubmenu(name) {
        // name = 'sell', 'rent', 'devs', 'pros'
        const targetId = `submenu-${name}`;
        const targetPanel = document.getElementById(targetId);

        if (!targetPanel) return; // segurança caso o id não exista

        mainPanel.classList.add("hidden");
        subPanels.forEach((panel) => panel.classList.add("hidden"));
        targetPanel.classList.remove("hidden");
      }

      // --------- LISTENERS / EVENTOS ----------

      // Clique no ícone hamburguer abre o menu
      if (menuBtn) {
        menuBtn.addEventListener("click", () => {
          openMenu();
        });
      }

      // Todos os botões com data-close-menu fecham o menu
      closeMenuButtons.forEach((btn) => {
        btn.addEventListener("click", () => {
          closeMenu();
        });
      });

      // Clique no backdrop também fecha o menu
      if (backdrop) {
        backdrop.addEventListener("click", () => {
          closeMenu();
        });
      }

      // Botões que abrem submenus
      openSubmenuButtons.forEach((btn) => {
        btn.addEventListener("click", () => {
          const target = btn.getAttribute("data-open-submenu");
          showSubmenu(target);
        });
      });

      // Botões "voltar" (seta) dentro dos submenus, voltam ao painel principal
      backButtons.forEach((btn) => {
        btn.addEventListener("click", () => {
          showMainPanel();
        });
      });

      // Fecha o menu quando se carrega na tecla ESC
      document.addEventListener("keydown", (e) => {
        if (e.key === "Escape") {
          closeMenu();
        }
      });

      // --------- FIM DO SCRIPT DO HEADER ----------

      // =================== CARROSSEL DE ANÚNCIOS DESTACADOS (RESPONSIVO) ===================
      (function () {
        const wrapper = document.getElementById("featured-wrapper");
        const list = document.getElementById("featured-carousel");
        const nextBtn = document.getElementById("featured-next");
        const prevBtn = document.getElementById("featured-prev");

        if (!wrapper || !list) return;

        function getStep() {
          const card = list.querySelector(".featured-carousel-card");
          if (!card) return 0;

          const rect = card.getBoundingClientRect();
          const styles = window.getComputedStyle(list);
          const gap = parseFloat(styles.gap || styles.columnGap || "0") || 0;

          return rect.width + gap;
        }

        function scroll(direction) {
          const step = getStep();
          if (!step) return;

          wrapper.scrollBy({
            left: direction * step,
            behavior: "smooth",
          });
        }

        // Botões
        nextBtn?.addEventListener("click", () => scroll(1));
        prevBtn?.addEventListener("click", () => scroll(-1));

        // Swipe (mobile)
        let startX = 0;
        let isDown = false;

        wrapper.addEventListener(
          "touchstart",
          (e) => {
            isDown = true;
            startX = e.touches[0].clientX;
          },
          { passive: true }
        );

        wrapper.addEventListener(
          "touchmove",
          (e) => {
            if (!isDown) return;
            const dx = e.touches[0].clientX - startX;
            if (Math.abs(dx) > 50) {
              dx < 0 ? scroll(1) : scroll(-1);
              isDown = false;
            }
          },
          { passive: true }
        );

        wrapper.addEventListener("touchend", () => {
          isDown = false;
        });
      })();
    }
  });
}
