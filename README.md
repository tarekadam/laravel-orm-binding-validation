```
class BankAccountController extends Controller{

	public $parent_child_relationships = [
		[ 'parent' => 'bank', 'child' => 'bank_account', 'relationship' => 'BankAccounts']
	];

	public function __construct(){
		$this->middleware('orm')
		     ->only(['store', 'edit', 'update', 'destroy']);
	}

	//...
}

```