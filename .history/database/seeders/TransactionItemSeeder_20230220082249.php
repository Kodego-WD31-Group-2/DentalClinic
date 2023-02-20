use App\Models\TransactionItem;
use Illuminate\Database\Seeder;

class TransactionItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transactionItems = [
            'Consultation fee', 
            'X-rays and diagnostic tests', 
            'Teeth cleaning and polishing', 
            'Composite fillings', 
            'Surgical extraction', 
            'Root canal treatment', 
            'Porcelain crown', 
            'Complete dentures', 
            'Implant', 
            'Braces', 
            'Teeth whitening treatment', 
            'Fluoride treatment', 
            'Sealant', 
            'Nitrous oxide sedation', 
            'Missed appointment fee',
        ];

        // Create a transaction item for each item in the $transactionItems array
        foreach ($transactionItems as $item) {
            TransactionItem::create([
                'item' => $item,
                'amount' => rand(50, 200) / 10,
            ]);
        }
    }
}
