<?php

namespace App\Policies;

use App\User;
use App\project;
use Illuminate\Auth\Access\HandlesAuthorization;

class projectpolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the project.
     *
     * @param  \App\User  $user
     * @param  \App\project  $project
     * @return mixed
     */
    public function view(User $user, project $project)
    {
        //
    }

    /**
     * Determine whether the user can create projects.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the project.
     *
     * @param  \App\User  $user
     * @param  \App\project  $project
     * @return mixed
     */
    public function update(User $user, project $project)
    {
       return $project->user_id == $user->id;
    }

    /**
     * Determine whether the user can delete the project.
     *
     * @param  \App\User  $user
     * @param  \App\project  $project
     * @return mixed
     */
    public function delete(User $user, project $project)
    {
        //
    }

    /**
     * Determine whether the user can restore the project.
     *
     * @param  \App\User  $user
     * @param  \App\project  $project
     * @return mixed
     */
    public function restore(User $user, project $project)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the project.
     *
     * @param  \App\User  $user
     * @param  \App\project  $project
     * @return mixed
     */
    public function forceDelete(User $user, project $project)
    {
        //
    }
}
