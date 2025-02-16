function init() {
    let currentScale = 1;
    const minScale = 1;
    const maxScale = 3;
    const frame = document.querySelector('.map__body');
    const map = document.querySelector('.map__pic');

    let posX = 0;
    let posY = 0;

    let isDragging = false;  // Флаг для проверки, нажата ли мышь
    let offsetX1, offsetY1;   // Смещение мыши относительно элемента

    let initialDistance = null; // Начальное расстояние между пальцами
    let initialScale = currentScale; // Начальный масштаб перед жестом

    function updateMapTransform() {
        map.style.transform = `scale(${currentScale}) translate(${posX}px, ${posY}px)`;
    }

    function updateBounds() {
        // Рассчитываем новые ограничения после изменения масштаба
        const frameRect = frame.getBoundingClientRect();
        const mapRect = map.getBoundingClientRect();

        const deltaWidth = mapRect.width - frameRect.width;
        const deltaHeight = mapRect.height - frameRect.height;

        const maxLeft = -deltaWidth / 2 / currentScale;
        const maxRight = deltaWidth / 2 / currentScale;

        const maxTop = -deltaHeight / 2 / currentScale;
        const maxBottom = deltaHeight / 2 / currentScale;

        // Перемещаем карту с учетом новых ограничений
        posX = Math.min(Math.max(posX, maxLeft), maxRight);
        posY = Math.min(Math.max(posY, maxTop), maxBottom);

        // Обновляем трансформацию карты
        updateMapTransform();
    }

    function zoomMap(factor) {
        currentScale = Math.min(Math.max(currentScale * factor, minScale), maxScale);
        document.querySelector('.map__button--zoom-out').classList.toggle('map__button--disabled', currentScale <= minScale);
        document.querySelector('.map__button--zoom-in').classList.toggle('map__button--disabled', currentScale >= maxScale);
        updateBounds();
    }

    document.querySelector('.map__button--zoom-in').addEventListener('click', function () {
        zoomMap(1.1); // Увеличиваем на 10%
    });

    document.querySelector('.map__button--zoom-out').addEventListener('click', function () {
        zoomMap(0.9091); // Уменьшаем на 10%
    });

    // Отслеживаем координаты мыши, чтобы знать, на какую часть карты мы навели.
    frame.addEventListener('mousedown', function (e) {
        isDragging = true;
        offsetX1 = e.clientX - frame.getBoundingClientRect().left;
        offsetY1 = e.clientY - frame.getBoundingClientRect().top;

        // Добавляем обработчик движения мыши
        document.addEventListener('mousemove', onMouseMove);

        // Добавляем обработчик для отпускания кнопки мыши
        document.addEventListener('mouseup', onMouseUp);
    });

    // Функция для перемещения элемента
    function onMouseMove(e) {
        if (isDragging && (currentScale > 1)) {
            // Рассчитываем новое положение карты
            const offsetX2 = e.clientX - frame.getBoundingClientRect().left;
            const offsetY2 = e.clientY - frame.getBoundingClientRect().top;

            posX += offsetX2 - offsetX1;
            posY += offsetY2 - offsetY1;

            // Обновляем старое смещение
            offsetX1 = offsetX2;
            offsetY1 = offsetY2;

            // Ограничиваем перемещение карты внутри рамки
            updateBounds();
        }
    }

    // Когда кнопка мыши отпущена, прекращаем перетаскивание
    function onMouseUp() {
        isDragging = false;

        // Убираем обработчики событий для мыши
        document.removeEventListener('mousemove', onMouseMove);
        document.removeEventListener('mouseup', onMouseUp);
    }


    // Перетаскивание с пальцами (для сенсорных экранов)
    frame.addEventListener('touchstart', function (e) {
        if (e.target !== frame && e.target !== map) {
            e.preventDefault();
        }
        // Обрабатываем только первое касание, если их больше одного
        if (e.touches.length === 1) {
            isDragging = true;
            const touch = e.touches[0];
            offsetX1 = touch.clientX - frame.getBoundingClientRect().left;
            offsetY1 = touch.clientY - frame.getBoundingClientRect().top;

            // Добавляем обработчик движения пальца
            document.addEventListener('touchmove', onTouchMove);

            // Добавляем обработчик для отпускания пальца
            document.addEventListener('touchend', onTouchEnd);
        }
    });

    // Функция для перемещения элемента с помощью пальцев
    function onTouchMove(e) {
        if (e.target !== frame && e.target !== map) {
            e.preventDefault();
        }
        if (isDragging && e.touches.length === 1 && (currentScale > 1)) {
            const touch = e.touches[0];
            const offsetX2 = touch.clientX - frame.getBoundingClientRect().left;
            const offsetY2 = touch.clientY - frame.getBoundingClientRect().top;

            posX += offsetX2 - offsetX1;
            posY += offsetY2 - offsetY1;

            offsetX1 = offsetX2;
            offsetY1 = offsetY2;

            updateBounds();
        }
    }

    function onTouchEnd() {
        isDragging = false;
        document.removeEventListener('touchmove', onTouchMove);
        document.removeEventListener('touchend', onTouchEnd);
    }


    // Обработчики для мобильного масштабирования (жесты пальцами)
    frame.addEventListener('touchstart', function (e) {
        if (e.target !== frame && e.target !== map) {
            e.preventDefault();
        }  // Отменяем стандартное поведение браузера, во избежание увеличения всего сайта при попытке увеличить карту
        if (e.touches.length === 2) {
            initialDistance = getDistance(e.touches[0], e.touches[1]);
            initialScale = currentScale;
        }
    });

    frame.addEventListener('touchmove', function (e) {
        if (e.target !== frame && e.target !== map) {
            e.preventDefault();
        }
        if (e.touches.length === 2) {
            const newDistance = getDistance(e.touches[0], e.touches[1]);
            const scaleFactor = newDistance / initialDistance;
            zoomMap(initialScale * scaleFactor / currentScale);
        }
    });

    frame.addEventListener('touchend', function (e) {
        if (e.target !== frame && e.target !== map) {
            e.preventDefault();
        }
        if (e.touches.length < 2) {
            initialDistance = null;
        }
    });

    // Функция для вычисления расстояния между двумя точками касания
    function getDistance(touch1, touch2) {
        const dx = touch1.clientX - touch2.clientX;
        const dy = touch1.clientY - touch2.clientY;
        return Math.sqrt(dx * dx + dy * dy);
    }

    const tooltip = document.querySelector('.map__tooltip');

    document.querySelectorAll('[data-tooltip]').forEach(function (region) {
        region.addEventListener('mouseenter', function (e) {
            const tooltipText = region.getAttribute('data-tooltip');

            if (tooltipText) {
                tooltip.textContent = tooltipText;
                tooltip.style.display = 'block';

                // Получаем координаты пути для позиционирования тултипа
                const regionRect = region.getBoundingClientRect();
                const mapRect = frame.getBoundingClientRect();
                const offsetX = regionRect.left - mapRect.left + regionRect.width / 3;
                console.log(mapRect.left);
                const offsetY = regionRect.top - mapRect.top - 20; // Чуть выше пути

                tooltip.style.left = `${offsetX}px`;
                tooltip.style.top = `${offsetY}px`;
            }
        });

        region.addEventListener('mouseleave', function () {
            tooltip.style.display = 'none';
        });
    });
}

export default { init };
