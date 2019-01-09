<?php

namespace Waygou\BrunoFalcao\Observers;

use \Exception;
use Waygou\BrunoFalcao\Models\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PostObserver
{
    /**
     * Handle the post "creating" event.
     *
     * @param  \Waygou\BrunoFalcao\Models\Post  $post
     * @return void
     */
    public function creating(Post $post)
    {
        //
    }

    /**
     * Handle the post "created" event.
     *
     * @param  \Waygou\BrunoFalcao\Models\Post  $post
     * @return void
     */
    public function created(Post $post)
    {
        //
    }

    /**
     * Handle the post "saving" event.
     *
     * @param  \Waygou\BrunoFalcao\Models\Post  $post
     * @return void
     */
    public function saving(Post $post)
    {
        $post->slug = kebab_case($post->title);

        $validator = Validator::make($post->getAttributes(), [
            'featured_image' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            throw new Exception($errors[0]);
        }

        // We need to translate the image acronyms to real urls.
        /*
        $post->body = str_replace_assoc(['image_1' => Storage::url($post->image_1),
                                         'image_2' => $post->image_2,
                                         'image_3' => $post->image_3,
                                         'image_4' => $post->image_4,
                                         'image_5' => $post->image_5
                                        ], $post->body);
        */
    }

    /**
     * Handle the post "saved" event.
     *
     * @param  \Waygou\BrunoFalcao\Models\Post  $post
     * @return void
     */
    public function saved(Post $post)
    {
        //
    }

    /**
     * Handle the post "updating" event.
     *
     * @param  \Waygou\BrunoFalcao\Models\Post  $post
     * @return void
     */
    public function updating(Post $post)
    {
        //
    }

    /**
     * Handle the post "updated" event.
     *
     * @param  \Waygou\BrunoFalcao\Models\Post  $post
     * @return void
     */
    public function updated(Post $post)
    {
        //
    }

    /**
     * Handle the post "deleted" event.
     *
     * @param  \Waygou\BrunoFalcao\Models\Post  $post
     * @return void
     */
    public function deleted(Post $post)
    {
        //
    }

    /**
     * Handle the post "restored" event.
     *
     * @param  \Waygou\BrunoFalcao\Models\Post  $post
     * @return void
     */
    public function restored(Post $post)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \Waygou\BrunoFalcao\Models\Post  $post
     * @return void
     */
    public function forceDeleted(Post $post)
    {
        //
    }
}
