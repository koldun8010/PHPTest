interface OrderServiceInterface
{
    public function createOrder(Order $order, int $cityId): Order;
}

class OrderService implements OrderServiceInterface
{
    private $orderRepository;
    private $logisticsClient;
    private $mailer; // Дополнительный сервис для отправки уведомлений

    public function __construct(OrderRepository $orderRepository, LogisticsClient $logisticsClient, Mailer $mailer)
    {
        $this->orderRepository = $orderRepository;
        $this->logisticsClient = $logisticsClient;
        $this->mailer = $mailer;
    }

    public function createOrder(Order $order, int $cityId): Order
        // Валидация заказа

        // Сохранение заказа в базе данных

        // Отправка заказа во внешнюю логистическую систему

        // Отправка уведомления пользователю
}

interface OrderInterface
{
    // Геттеры и сеттеры для свойств заказа (товары, адрес доставки и т.д.)
}

class Order implements OrderInterface
{
    // Реализация геттеров и сеттеров для свойств заказа
}

class OrderController
{
    public function createOrderAction()
    {
        $orderService = new OrderService();
        $order = new Order();
        $cityId = (int) $_GET['city_id']; // Получение города из GET-параметра

        // Заполнение свойств заказа данными из запроса

        $order = $orderService->createOrder($order, $cityId);

        // Перенаправление на страницу подтверждения заказа
    }
}
