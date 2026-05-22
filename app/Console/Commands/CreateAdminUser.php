<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CreateAdminUser extends Command
{
    protected $signature = 'inn:admin
                            {--email=admin@inngroup.com.au : Admin email}
                            {--password= : New password (default: password)}
                            {--name=INN Admin : Display name}';

    protected $description = 'Create or reset the INN Group admin login';

    public function handle(): int
    {
        $email = $this->option('email');
        $password = $this->option('password') ?: 'password';
        $name = $this->option('name');

        $validator = Validator::make(
            ['email' => $email, 'password' => $password],
            ['email' => 'required|email', 'password' => 'required|min:8']
        );

        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                $this->error($error);
            }

            return self::FAILURE;
        }

        $user = User::updateOrCreate(
            ['email' => $email],
            [
                'name' => $name,
                'password' => Hash::make($password),
                'email_verified_at' => now(),
            ]
        );

        $this->info($user->wasRecentlyCreated ? 'Admin user created.' : 'Admin user password reset.');
        $this->table(['Field', 'Value'], [
            ['Email', $email],
            ['Password', $password],
            ['Login URL', url('/login')],
        ]);

        return self::SUCCESS;
    }
}
