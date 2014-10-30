<?php namespace JeroenG\LaravelPhotoGallery\Repositories;

use JeroenG\LaravelPhotoGallery\Models\Album;

class EloquentAlbumRepository implements AlbumRepository {
	
	public function all()
	{
		return Album::all();
	}

	public function find($id)
	{
		return Album::find($id);
	}

	public function findOrFail($id)
	{
		return Album::findOrFail($id);
	}

	public function create($input)
	{
		return Album::create($input);
	}

	public function update($id, $input)
	{
		$album = Album::find($id);
		$album->album_name = $input['album_name'];
		$album->album_description = $input['album_description'];
		$album->album_type = $input['album_type'];
		$album->album_origin = $input['album_origin'];
		$album->album_pattern = $input['album_pattern'];
		$album->album_othername = $input['album_othername'];
		$album->album_application_kitchen = $input['album_application_kitchen'];
		$album->album_application_bathroom = $input['album_application_bathroom'];
		$album->album_application_fireplace = $input['album_application_fireplace'];
		$album->album_application_floor = $input['album_application_floor'];
		$album->album_application_outdoor = $input['album_application_outdoor'];
		$album->album_color_black = $input['album_color_black'];
		$album->album_color_blue = $input['album_color_blue'];
		$album->album_color_brown = $input['album_color_brown'];
		$album->album_color_gold = $input['album_color_gold'];
		$album->album_color_gray = $input['album_color_gray'];
		$album->album_color_green = $input['album_color_green'];
		$album->album_color_red = $input['album_color_red'];
		$album->album_color_white = $input['album_color_white'];
		$album->album_absorption = $input['album_absorption'];
		$album->album_density = $input['album_density'];
		$album->album_compression = $input['album_compression'];
		$album->album_abrasion = $input['album_abrasion'];
		$album->album_flex = $input['album_flex'];
		$album->touch();
		return $album->save();
	}

	public function delete($id)
	{
		$album = Album::find($id);
		$albumPhotos = $album->photos;
		$photoRepository = \App::make('Repositories\PhotoRepository');

		foreach ($albumPhotos as $photo) {
			$photoRepository->delete($photo->photo_id);
		}
		return $album->delete();
	}

	public function forceDelete($id)
	{
		$album = Album::find($id);
		$albumPhotos = $album->photos;
		$photoRepository = \App::make('Repositories\PhotoRepository');

		foreach ($albumPhotos as $photo) {
			$photoRepository->forceDelete($photo->photo_id);
		}
		return $album->forceDelete();
	}

	public function restore($id)
	{
		$album = Album::withTrashed()->find($id);
		$photoRepository = \App::make('Repositories\PhotoRepository');
		$photoRepository->restoreFromAlbum($id);
		return $album->restore();
	}
}