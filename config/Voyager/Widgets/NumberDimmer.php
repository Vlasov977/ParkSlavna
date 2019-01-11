<?php
namespace TCG\Voyager\Widgets;
use App\Number;
use TCG\Voyager\Facades\Voyager;
use Arrilot\Widgets\AbstractWidget;
class NumberDimmer extends AbstractWidget
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
        $count = Number::all()->count();
        $string = $count == 1 ? 'Номера' : 'Номера';
        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-company',
            'title'  => "{$count} {$string}",
            'text'   => "В базі даних {$count} номеров.",
            'button' => [
                'text' => 'Посмотреть все',
                'link' => route('voyager.numbers.index'),
            ],
            'image' => asset('voyager/cottages.jpg'),
        ]));
    }
}