from django.conf.urls import url

from nominationapp import views

urlpatterns = [
    url(r'^$', views.all_data.as_view(), name="All Nomination"),
]