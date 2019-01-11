<?php
namespace TCG\Voyager\Widgets;
use App\Reservation;
use TCG\Voyager\Facades\Voyager;
use Arrilot\Widgets\AbstractWidget;
class ReservationDimmer extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];
    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Reservation::all()->count();
        $string = $count == 1 ? 'Бронирование' : 'Бронирование';
        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-company',
            'title'  => "{$count} {$string}",
            'text'   => "В базі даних {$count} заказов.",
            'button' => [
                'text' => 'Посмотреть все',
                'link' => route('voyager.reservations.index'),
            ],
            'image' => asset('voyager/revervation-e1498386739143.jpg'),
        ]));
    }
}