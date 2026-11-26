document.addEventListener('DOMContentLoaded', () => {
    const section = document.querySelector('#categorias-productos');
    const list = section?.querySelector('.catalog-categories__grid');
    const buttons = section?.querySelectorAll('.catalog-categories__arrow');
    if (!list || !buttons?.length) return;

    const updateButtons = () => {
        const maxScroll = list.scrollWidth - list.clientWidth;
        buttons.forEach((button) => {
            button.disabled = Number(button.dataset.direction) < 0
                ? list.scrollLeft <= 1
                : list.scrollLeft >= maxScroll - 1;
        });
    };

    buttons.forEach((button) => {
        button.addEventListener('click', () => {
            const item = list.querySelector('.catalog-categories__item');
            if (!item) return;
            list.scrollBy({
                left: item.getBoundingClientRect().width * Number(button.dataset.direction),
                behavior: window.matchMedia('(prefers-reduced-motion: reduce)').matches ? 'instant' : 'smooth',
            });
        });
    });

    list.addEventListener('scroll', updateButtons, { passive: true });
    window.addEventListener('resize', updateButtons);
    updateButtons();
});

document.addEventListener('DOMContentLoaded', () => {
    const section = document.querySelector('#peso');
    const form = section?.querySelector('.product-filters__panel');
    const cards = Array.from(section?.querySelectorAll('.product-card') || []);
    const results = section?.querySelector('.product-filters__results');
    if (!form || !cards.length || !results) return;

    const applyFilters = () => {
        const selected = Object.fromEntries(['weight', 'power', 'capacity'].map((type) => [
            type,
            Array.from(form.querySelectorAll(`input[data-filter="${type}"]:checked`), (input) => input.value.split('-').map(Number)),
        ]));
        let visible = 0;
        cards.forEach((card) => {
            const matches = (ranges, min, max = min) => !ranges.length || ranges.some(([start, end]) => max >= start && min < end);
            const show = matches(selected.weight, Number(card.dataset.weight)) &&
                matches(selected.power, Number(card.dataset.powerMin), Number(card.dataset.powerMax)) &&
                matches(selected.capacity, Number(card.dataset.capacity));
            card.hidden = !show;
            if (show) visible++;
        });
        results.textContent = visible === 0 ? 'No se encontraron excavadoras con los filtros seleccionados.' : '';
    };

    form.addEventListener('change', applyFilters);
    form.addEventListener('reset', () => setTimeout(applyFilters, 0));
    form.addEventListener('submit', (event) => event.preventDefault());
});
