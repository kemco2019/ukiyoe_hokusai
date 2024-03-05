import openai
from openai import OpenAI
import sys
import urllib.error
import urllib.request
from PIL import Image
#Copyright © 2001-2020 Python Software Foundation; All Rights Reserved



prompt_in = sys.argv[1]
origin_img = sys.argv[2]
mask_img = sys.argv[3]
api_key="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"
client = OpenAI(api_key=api_key)

def download_file(url, dst_path):
    try:
        with urllib.request.urlopen(url) as web_file:
            data = web_file.read()
            with open(dst_path, mode='wb') as local_file:
                local_file.write(data)
    except urllib.error.URLError as e:
        print(e)


response = client.images.edit(
  image=open(origin_img, "rb"),
  mask=open(mask_img, "rb"),
  prompt=prompt_in,
  n=1,
  size="512x512"
)
print(response)
image_url = response.data[0].url
dst_path = 'image/dalle.png'
download_file(image_url, dst_path)
print('image/dalle.png')
print(image_url)