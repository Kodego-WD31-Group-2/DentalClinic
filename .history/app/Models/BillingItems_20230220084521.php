namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillingItems extends Model
{
    protected $fillable = [
        'billing_id',
        'transactionitem_id',
        'quantity',
        'total_cost'
    ];

    public function billing()
    {
        return $this->belongsTo(Billings::class, 'billing_id', 'billing_id');
    }

    public function transactionItem()
    {
        return $this->belongsTo(TransactionItem::class, 'transactionitem_id', 'id');
    }
}
